<?php
$conn = new mysqli("localhost", "root", "", "hdb");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Handle Add Item
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_item'])) {
    $icode = isset($_POST['icode']) ? $_POST['icode'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $ides = isset($_POST['ides']) ? $_POST['ides'] : ''; // Added for description
    $target_dir = "images/";
    $image_name = basename($_FILES["img"]["name"]);
    $target_file = $target_dir . time() . "_" . $image_name;
    $check = getimagesize($_FILES["img"]["tmp_name"]);

    // Check if file is a valid image type
    if ($check !== false && in_array($check['mime'], ['image/jpeg', 'image/png', 'image/gif'])) {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            $stmt = $conn->prepare("INSERT INTO item (icode, name, price, img, ides) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $icode, $name, $price, $target_file, $ides);
            if ($stmt->execute()) {
                $msg = "✅ Item added successfully!";
            } else {
                $msg = "❌ Error: " . $stmt->error;
            }
        } else {
            $msg = "❌ Image upload failed.";
        }
    } else {
        $msg = "❌ Invalid image file.";
    }
}

// Handle Delete Item
if (isset($_GET['delete'])) {
    $icode = $_GET['delete'];
    $conn->query("DELETE FROM item WHERE icode='$icode'");
    header("Location: item_manager.php?view=1");
    exit;
}

// Handle Edit Form Display
if (isset($_GET['edit'])) {
    $icode = $_GET['edit'];
    $result = $conn->query("SELECT * FROM item WHERE icode='$icode'");
    $editRow = $result->fetch_assoc();
}

// Handle Update Item (including image update)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_item'])) {
    $icode = isset($_POST['icode']) ? $_POST['icode'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $ides = isset($_POST['ides']) ? $_POST['ides'] : ''; // Added for description
    $update_query = "UPDATE item SET name=?, price=?, ides=? WHERE icode=?";

    if (!empty($_FILES['img']['name'])) {
        $target_dir = "images/";
        $image_name = basename($_FILES["img"]["name"]);
        $target_file = $target_dir . time() . "_" . $image_name;
        $check = getimagesize($_FILES["img"]["tmp_name"]);

        if ($check !== false && in_array($check['mime'], ['image/jpeg', 'image/png', 'image/gif'])) {
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                // Delete old image if a new one is uploaded
                unlink($editRow['img']);
                $update_query = "UPDATE item SET name=?, price=?, ides=?, img=? WHERE icode=?";
                $stmt = $conn->prepare($update_query);
                $stmt->bind_param("sssss", $name, $price, $ides, $target_file, $icode);
            } else {
                $msg = "❌ Image upload failed.";
            }
        } else {
            $msg = "❌ Invalid image file.";
        }
    } else {
        // If no new image is uploaded, just update the other fields
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("ssss", $name, $price, $ides, $icode);
    }
    $stmt->execute();
    header("Location: item_manager.php?view=1");
    exit;
}

// Handle Search
$search = $_GET['search'] ?? '';
$sql = $search ? "SELECT * FROM item WHERE icode LIKE '%$search%' OR name LIKE '%$search%'" : "SELECT * FROM item";
$result = $conn->query($sql);

// Handle Combo Pack Creation (Multiple Items)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_combo_pack'])) {
    $combo_name = isset($_POST['combo_name']) ? $_POST['combo_name'] : '';
    $combo_price = isset($_POST['combo_price']) ? $_POST['combo_price'] : '';
    $item_codes = isset($_POST['item_codes']) ? $_POST['item_codes'] : [];

    if (!empty($item_codes)) {
        $combo_description = "Combo Pack: " . $combo_name . " includes the following items: ";
        $combo_images = [];
        $combo_prices = [];

        // Fetch selected items and prepare description & images
        foreach ($item_codes as $icode) {
            $item_result = $conn->query("SELECT * FROM item WHERE icode='$icode'");
            $item = $item_result->fetch_assoc();
            if ($item) {
                $combo_description .= $item['Name'] . ", ";
                $combo_images[] = $item['img'];
                $combo_prices[] = $item['Price'];
            }
        }
        $combo_description = rtrim($combo_description, ', ') . ".";

        // Insert the combo pack into the database
        $combo_image = implode(", ", $combo_images); // Store all item images as a comma-separated list
        $stmt = $conn->prepare("INSERT INTO item (icode, name, price, img, ides) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $combo_name, $combo_name, $combo_price, $combo_image, $combo_description);
        $stmt->execute();
        $msg = "✅ Combo pack created successfully!";
    } else {
        $msg = "❌ No items selected for combo pack.";
    }
}

// View Combo Pack Details (when clicked)
if (isset($_GET['view_combo'])) {
    $icode = $_GET['view_combo'];
    $combo_result = $conn->query("SELECT * FROM item WHERE icode='$icode'");
    $combo = $combo_result->fetch_assoc();
    $combo_images = explode(", ", $combo['img']);
    $combo_prices = explode(", ", $combo['ides']); // Assuming the description holds the prices for each item in the combo.
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item Manager</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            padding: 40px;
            background-color: #f4f7fa;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        a {
            text-decoration: none;
            color: #007bff;
            margin-right: 20px;
            font-size: 18px;
            font-weight: 500;
        }
        form {
            margin-bottom: 30px;
        }
        .item-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }
        .item-card {
            background-color: #fff;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            padding: 20px;
            width: calc(33% - 20px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .item-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }
        .item-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .item-card h3 {
            margin: 10px 0;
            font-size: 20px;
            font-weight: bold;
        }
        .item-card p {
            margin: 5px 0;
            font-size: 14px;
        }
        .action-btns a {
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }
        .action-btns a:hover {
            background-color: #0056b3;
        }
        .action-btns a.delete {
            background-color: #dc3545;
        }
        .action-btns a.delete:hover {
            background-color: #c82333;
        }
        .message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .nav {
            margin-bottom: 40px;
            font-size: 18px;
            font-weight: 500;
        }
        input[type="submit"], input[type="button"] {
            background-color: #28a745;
            border: none;
            padding: 10px 20px;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover, input[type="button"]:hover {
            background-color: #218838;
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        button {
            background-color: #17a2b8;
            border: none;
            padding: 10px 20px;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #138496;
        }
        .selected-items {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="nav">
        <a href="item_manager.php?add_item=1">➕ Add Item</a>
        <a href="item_manager.php?view=1">📋 View Items</a>
        <a href="item_manager.php?create_combo_pack=1">🛒 Create Combo Pack</a>
    </div>

    <?php if (!empty($msg)) echo "<div class='message'>$msg</div>"; ?>

    <!-- Add Item Form -->
    <?php if (isset($_GET['add_item'])): ?>
        <h2>Add New Item</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="icode" placeholder="Item Code" required>
            <input type="text" name="name" placeholder="Item Name" required>
            <input type="number" name="price" placeholder="Price" required>
            <textarea name="ides" placeholder="Description" rows="4" required></textarea>
            <input type="file" name="img" required>
            <input type="submit" name="add_item" value="Add Item">
        </form>
    <?php endif; ?>

    <!-- Edit Item Form -->
    <?php if (isset($_GET['edit'])): ?>
        <h2>Edit Item</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="icode" value="<?= $editRow['Icode'] ?>">
            <input type="text" name="name" value="<?= $editRow['Name'] ?>" required>
            <input type="number" name="price" value="<?= $editRow['Price'] ?>" required>
            <textarea name="ides" rows="4" required><?= $editRow['ides'] ?></textarea>
            <input type="file" name="img">
            <input type="submit" name="update_item" value="Update Item">
        </form>
    <?php endif; ?>

    <!-- View Items -->
    <?php if (isset($_GET['view']) || !isset($_GET['add_item'])): ?>
        <h2>View Items</h2>
        <form method="GET">
            <input type="text" name="search" value="<?= $search ?>" placeholder="Search for an item...">
            <input type="submit" value="Search">
        </form>

        <div class="item-container">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="item-card">
                    <img src="<?= $row['img'] ?>" alt="<?= $row['Name'] ?>">
                    <h3><?= $row['Name'] ?></h3>
                    <p>Price: <?= $row['Price'] ?> LKR</p>
                    <p><?= substr($row['ides']??'', 0, 100) ?>...</p>
                    <div class="action-btns">
                        <a href="item_manager.php?edit=<?= $row['Icode'] ?>">Edit</a>
                        <a href="item_manager.php?delete=<?= $row['Icode'] ?>" class="delete">Delete</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>



</body>
</html>
