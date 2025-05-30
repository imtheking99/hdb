<?php
$conn = new mysqli("localhost", "root", "", "hdb");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if (isset($_POST['generate_quotation'])) {
    $customer_name = $_POST['customer_name'];
    $items = $_POST['items'];
    $total_price = 0;
    $valid_items = [];

    foreach ($items as $icode => $item) {
        if ($item['quantity'] > 0) {
            $valid_items[$icode] = $item;
        }
    }

    if (count($valid_items) == 0) {
        echo "<div class='alert error'>❌ You must select at least one item with a positive quantity.</div>";
    } else {
        // Calculate total price first
        foreach ($valid_items as $icode => $item) {
            $price = $item['price'];
            $quantity = $item['quantity'];
            $total_price += $price * $quantity;
        }

        // Get the current date and time from the server
        $current_date = date("Y-m-d H:i:s");

        // Insert into quotation
        $stmt = $conn->prepare("INSERT INTO quotation (customer_name, total_price, quotation_date) VALUES (?, ?, ?)");
        $stmt->bind_param("sds", $customer_name, $total_price, $current_date);
        $stmt->execute();
        $quote_id = $stmt->insert_id;

        // Insert items
        foreach ($valid_items as $icode => $item) {
            $name = $item['name'];
            $price = $item['price'];
            $quantity = $item['quantity'];

            $stmt = $conn->prepare("INSERT INTO quotation_items (quote_id, icode, name, price, quantity) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("issdi", $quote_id, $icode, $name, $price, $quantity);
            $stmt->execute();
        }

        echo "<div class='alert success'>✅ Quotation generated successfully!<br>Total Price: Rs. " . number_format($total_price, 2) . "</div>";
    }
}

$item_result = $conn->query("SELECT * FROM item");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Quotation</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f4f8;
            margin: 0;
            padding: 30px;
            color: #333;
        }
        h2 {
            color: #222;
            margin-top: 40px;
        }
        .item-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .item-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 15px;
            width: 250px;
            transition: transform 0.2s;
        }
        .item-card:hover {
            transform: translateY(-5px);
        }
        .item-card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 8px;
        }
        .item-card h3 {
            margin: 10px 0 5px;
            font-size: 18px;
            color: #111;
        }
        .item-card p {
            margin: 2px 0;
            font-size: 14px;
        }
        .item-card input[type="number"] {
            width: 60px;
            padding: 4px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="text"], input[type="submit"], button {
            padding: 10px;
            font-size: 15px;
            border-radius: 8px;
            border: none;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 300px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        table th {
            background: #007bff;
            color: white;
        }
        table tr:nth-child(even) {
            background: #f9f9f9;
        }
        .alert {
            margin: 20px 0;
            padding: 15px;
            border-radius: 8px;
        }
        .alert.success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert.error {
            background-color: #f8d7da;
            color: #721c24;
        }
        .search-bar {
            margin-bottom: 30px;
        }
        .print-btn {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 14px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 10px;
        }
        .print-btn:hover {
            background-color: #0056b3;
        }
        @media print {
            /* Hide unnecessary elements during printing */
            .print-btn, form, .alert, .search-bar {
                display: none;
            }

            table, h3, p {
                page-break-inside: avoid;
            }

            /* Add header and footer images */
            body {
                padding-top: 100px; /* Ensure space for the header */
                padding-bottom: 100px; /* Ensure space for the footer */
            }

            body::before {
                content: "";
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                height: 80px;
                background: url('path_to_header_image.jpg') no-repeat center center;
                background-size: cover;
                z-index: -1;
            }

            body::after {
                content: "";
                display: block;
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                height: 80px;
                background: url('path_to_footer_image.jpg') no-repeat center center;
                background-size: cover;
                z-index: -1;
            }
        }
        .quote-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<h2>📝 Create Quotation</h2>
<form method="POST" action="quotation_manager.php">
    <label><strong>Customer Name:</strong></label><br>
    <input type="text" name="customer_name" required><br><br>

    <label><strong>Select Items:</strong></label><br>
    <div class="item-container">
        <?php while ($row = $item_result->fetch_assoc()): ?>
            <div class="item-card">
                <img src="<?= htmlspecialchars($row['img']) ?>" alt="Image">
                <h3><?= htmlspecialchars($row['Name']) ?></h3>
                <p><strong>Price:</strong> Rs. <?= number_format($row['Price'], 2) ?></p>
                <label>Quantity:</label><br>
                <input type="number" name="items[<?= $row['Icode'] ?>][quantity]" value="0" min="0"><br>
                <input type="hidden" name="items[<?= $row['Icode'] ?>][price]" value="<?= $row['Price'] ?>">
                <input type="hidden" name="items[<?= $row['Icode'] ?>][name]" value="<?= $row['Name'] ?>">
            </div>
        <?php endwhile; ?>
    </div><br>
    <input type="submit" name="generate_quotation" value="Generate Quotation">
</form>

<hr>

<h2>📄 View Quotations</h2>
<form method="GET" action="quotation_manager.php" class="search-bar">
    <input type="text" name="search" placeholder="Search by customer name">
    <input type="submit" value="Search">
</form>

<?php
$search = $_GET['search'] ?? '';
$sql = $search ? "SELECT * FROM quotation WHERE customer_name LIKE '%$search%'" : "SELECT * FROM quotation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $quote_id = $row['quote_id'];
        $customer_name = htmlspecialchars($row['customer_name']);
        $quotation_date = date("Y-m-d"); // Get the current date and time  // Directly use the stored date from the database
        echo "<div class='quotation-container' id='quotation-$quote_id'>";
        echo "<h3>📌 Quotation for <strong>$customer_name</strong></h3>";
        echo "<p>Quote ID: <strong>$quote_id</strong></p>";
        echo "<p>Customer Name: <strong>$customer_name</strong></p>";
        echo "<p>Date: <strong>$quotation_date</strong></p>";  // Display the date
        echo "<p>Total Price: <strong>Rs. " . number_format($row['total_price'], 2) . "</strong></p>";

        // Fetch quotation items
        $item_result = $conn->query("SELECT qi.*, i.img FROM quotation_items qi LEFT JOIN item i ON qi.icode = i.Icode WHERE qi.quote_id='$quote_id'");

        // Initialize total sum
        $total = 0;

        echo "<table>
            <tr>
                <th>Image</th>
                <th>Item Name</th>
                <th>Price (Rs.)</th>
                <th>Quantity</th>
                <th>Total (Rs.)</th>
            </tr>";

        while ($item = $item_result->fetch_assoc()) {
            $item_total = $item['price'] * $item['quantity'];
            $total += $item_total;  // Add item total to grand total

            echo "<tr>
                <td><img src='" . htmlspecialchars($item['img']) . "' class='quote-img'></td>
                <td>" . htmlspecialchars($item['name']) . "</td>
                <td>" . number_format($item['price'], 2) . "</td>
                <td>" . $item['quantity'] . "</td>
                <td>" . number_format($item_total, 2) . "</td>
            </tr>";
        }

        // Display grand total
        echo "<tr>
            <td colspan='4' style='text-align: right; font-weight: bold;'>Grand Total:</td>
            <td style='font-weight: bold;'>Rs. " . number_format($total, 2) . "</td>
        </tr>";

        echo "</table><br>";
        echo "<button class='print-btn' onclick='printQuotation($quote_id);'>🖨 Print Quotation</button><br><br>";
        echo "</div>";
    }
} else {
    echo "<p>No quotations found.</p>";
}
?>

<script>
    function printQuotation(quote_id) {
        var printContents = document.getElementById('quotation-' + quote_id).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

</body>
</html>
