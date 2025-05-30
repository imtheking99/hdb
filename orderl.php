<?php
$conn = new mysqli("localhost", "root", "", "hdb");

$submitted = false;
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $item = $conn->real_escape_string($_POST['item']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $sql = "INSERT INTO customer_orders (full_name, item_name, delivery_address, phone_number)
            VALUES ('$name', '$item', '$address', '$phone')";

    if ($conn->query($sql) === TRUE) {
        $submitted = true;
        $message = "Order placed successfully!";
    } else {
        $submitted = true;
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Place Order</title>
</head>
<body>
<?php if ($submitted): ?>
    <p style="color: <?= strpos($message, 'Error') === false ? 'green' : 'red' ?>; font-weight: bold;">
        <?= $message ?>
    </p>

    <script>
        setTimeout(() => {
            window.close();
        }, 2000);
    </script>
<?php else: ?>
    <form method="POST" action="">
        <label>Full Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Item Name:</label><br>
        <input type="text" name="item" required><br><br>

        <label>Delivery Address:</label><br>
        <input type="text" name="address" required><br><br>

        <label>Phone Number:</label><br>
        <input type="text" name="phone" id="phone" required><br><br>

        <input type="submit" value="Place Order" id="submitBtn" disabled>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const phoneInput = document.getElementById('phone');
            const submitBtn = document.getElementById('submitBtn');

            function validatePhone() {
                const value = phoneInput.value.trim();
                submitBtn.disabled = !/^\d+$/.test(value);
            }

            phoneInput.addEventListener('input', validatePhone);
            validatePhone(); // Run once on load in case browser fills it in
        });
    </script>
<?php endif; ?>
</body>
</html>
