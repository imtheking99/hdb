<?php
// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "hdb");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form values
    $icode = $_POST['icode'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Image handling
    $target_dir = "images/";
    $image_name = basename($_FILES["img"]["name"]);
    $target_file = $target_dir . time() . "_" . $image_name; // avoid duplicate names
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate image file
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            // Save path to DB
            $sql = "INSERT INTO item (icode, name, price, img) VALUES ('$icode', '$name', '$price', '$target_file')";
            if ($conn->query($sql) === TRUE) {
                $message = "✅ Item added successfully!";
            } else {
                $message = "❌ Database error: " . $conn->error;
            }
        } else {
            $message = "❌ Failed to upload image file.";
        }
    } else {
        $message = "❌ File is not a valid image.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Item (With Image Path)</title>
  <style>
    body { font-family: Arial; padding: 30px; }
    form { width: 300px; }
    label { font-weight: bold; }
    input[type=text], input[type=number], input[type=file] {
      width: 100%; padding: 8px; margin-bottom: 10px;
    }
    input[type=submit] {
      background-color: green; color: white; padding: 10px;
      border: none; cursor: pointer;
    }
    .message { margin-top: 20px; font-weight: bold; color: darkblue; }
  </style>
</head>
<body>

  <h2>Add Item to Database</h2>
  <form action="" method="POST" enctype="multipart/form-data">
    <label>Item Code:</label>
    <input type="text" name="icode" required>

    <label>Item Name:</label>
    <input type="text" name="name" required>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" required>

    <label>Image:</label>
    <input type="file" name="img" accept="image/*" required>

    <input type="submit" value="Add Item">
  </form>

  <?php if (!empty($message)) echo "<div class='message'>$message</div>"; ?>

</body>
</html>
