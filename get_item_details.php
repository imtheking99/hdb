<?php
// Database Connection
$conn = new mysqli("localhost", "root", "", "hdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch item details based on item code (icode)
if (isset($_GET['icode'])) {
    $icode = $_GET['icode'];
    
    $result = $conn->query("SELECT * FROM item WHERE icode = '$icode'");
    if ($result->num_rows > 0) {
        $item = $result->fetch_assoc();
        $imagePaths = explode(",", $item['img']);
        
        // Display item details for the page
        echo "<div class='product-page-container'>";
        
        // Product Image Gallery
        echo "<div class='product-images-container'>";
        echo "<div class='main-image'>";
        echo "<img src='" . $imagePaths[0] . "' alt='Main Product Image' class='main-image-display'>";
        echo "</div>";
        echo "<div class='thumbnail-gallery'>";
        foreach ($imagePaths as $index => $path) {
            echo "<div class='thumbnail' onclick='changeMainImage($index)'>";
            echo "<img src='" . $path . "' alt='Product Image' class='thumbnail-image'>";
            echo "</div>";
        }
        echo "</div>"; // End of thumbnail gallery
        echo "</div>"; // End of product-images-container

        // Product Details Section
        echo "<div class='product-details-container'>";
        echo "<h1 class='product-name'>" . htmlspecialchars($item['Name'] ?? '') . "</h1>";
        echo "<p class='product-code'><strong>Code:</strong> " . $item['Icode'] . "</p>";
        echo "<p class='product-price'><strong>Price:</strong> Rs. " . number_format($item['Price'], 2) . "</p>";

        // Product Description
        echo "<div class='product-description'>";
        echo "<h3>Description</h3>";
        echo "<p>" . nl2br(htmlspecialchars($item['ides'])) . "</p>";
        echo "</div>"; // End of product-description

        // Add to Cart Button (or Contact Supplier)
        echo "<button class='add-to-cart-btn'>Contact Supplier</button>";
        echo "</div>"; // End of product-details-container
        
        echo "</div>"; // End of product-page-container
    } else {
        echo "Item not found.";
    }
} else {
    echo "No item code provided.";
}
?>

<!-- Add styles for the layout -->
<style>
    /* Main Product Page Layout */
    .product-page-container {
        display: flex;
        max-width: 1200px;
        margin: 50px auto;
        padding: 30px;
        background: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        font-family: 'Arial', sans-serif;
    }

    /* Left side: Image Gallery */
    .product-images-container {
        width: 40%;
        margin-right: 30px;
    }

    .main-image {
        width: 100%;
        margin-bottom: 20px;
    }

    .main-image-display {
        width: 100%;
        height: auto;
        object-fit: contain;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .thumbnail-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .thumbnail {
        width: 20%;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .thumbnail:hover {
        transform: scale(1.1);
    }

    .thumbnail-image {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 8px;
    }

    /* Right side: Product Details */
    .product-details-container {
        width: 60%;
    }

    .product-name {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
    }

    .product-code,
    .product-price {
        font-size: 18px;
        margin: 10px 0;
        color: #555;
    }

    .product-description {
        margin-top: 20px;
        font-size: 16px;
        color: #777;
    }

    .product-description h3 {
        font-size: 20px;
        color: #333;
    }

    /* Add to Cart Button */
    .add-to-cart-btn {
        margin-top: 30px;
        padding: 15px 30px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .add-to-cart-btn:hover {
        background-color: #0056b3;
    }

</style>

<!-- JavaScript for changing the main image when a thumbnail is clicked -->
<script>
    function changeMainImage(index) {
        var mainImage = document.querySelector('.main-image-display');
        var thumbnails = document.querySelectorAll('.thumbnail-image');
        
        mainImage.src = thumbnails[index].src;
    }
</script>
