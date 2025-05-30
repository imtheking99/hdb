
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDB ENGINEERING LANKA</title>
	 <!-- Google Font - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

</head>
<body>

   <?php include 'navbar2.php'; ?>

   </br></br></br></br>
<!---------------------------------------------------------------ITEM DESCRIPTION------------------------------------------------------------------------------------------------>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5IN1 Rice Mill - Product Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .product-gallery {
            width: 48%;
            position: relative;
            overflow: hidden;
        }

        .product-gallery img {
            width: 100%;
            border-radius: 8px;
        }

        .zoomed-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 200%;
            height: 200%;
            visibility: hidden;
            object-fit: cover;
            border-radius: 8px;
        }

        .thumbnail-container {
            display: flex;
            margin-top: 10px;
            gap: 10px;
        }

        .thumbnail-container img {
            width: 80px;
            height: 80px;
            border-radius: 5px;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .thumbnail-container img:hover {
            border: 2px solid #ff6600;
        }

        .product-info {
            width: 48%;
        }

        .product-info h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .price {
            font-size: 20px;
            color: #ff6600;
            margin: 10px 0;
        }

        .variations {
            margin-top: 15px;
        }

        .variations label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .variations select {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .product-description {
            margin-top: 20px;
            font-size: 16px;
            color: #555;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .inquiry {
            background: #ff6600;
            color: white;
            margin-bottom: 10px;
        }

        .chat {
            background: #007bff;
            color: white;
        }

        .inquiry:hover {
            background: #e65c00;
        }

        .chat:hover {
            background: #0056b3;
        }

        /* Additional Styles for List Items */
        .product-description ul {
            list-style-type: none;
            padding: 0;
        }

        .product-description li {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.6;
        }

        .product-description li strong {
            color: #4CAF50; /* Green for emphasis */
            font-weight: bold;
        }

        .product-description li::before {
            content: "✔️ "; /* Adds a checkmark before each item */
            color: #2196F3; /* Blue for the checkmark */
            font-size: 18px;
        }

        .product-description li:nth-child(odd) {
            background-color: #f9f9f9; /* Light gray background for odd items */
            padding: 10px;
            border-radius: 5px;
        }

        .product-description li:nth-child(even) {
            background-color: #e8f5e9; /* Light green background for even items */
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Product Image Section -->
        <div class="product-gallery">
            <img id="mainImage" src="images/ANIMAL_FEED/FEED_180/1.png" alt="FEED PELLET 180">
            <img id="zoomedImage" class="zoomed-image" src="images/ANIMAL_FEED/FEED_180/1.png" alt="Zoomed Image">

            <div class="thumbnail-scroll-container">
                <button class="scroll-btn left" onclick="scrollThumbnails('left')">&#8592;</button>
                
                <div class="thumbnail-wrapper">
                    <div class="thumbnail-container" id="thumbnailContainer">
                <img src="images/ANIMAL_FEED/FEED_180/1.png" onclick="changeImage(this)">
                <img src="images/ANIMAL_FEED/FEED_180/2.png" onclick="changeImage(this)">
                <img src="images/ANIMAL_FEED/FEED_180/3.png" onclick="changeImage(this)">
                <img src="images/ANIMAL_FEED/FEED_180/4.png" onclick="changeImage(this)">
				<img src="images/ANIMAL_FEED/FEED_180/5.png" onclick="changeImage(this)">
				<img src="images/ANIMAL_FEED/FEED_180/6.png" onclick="changeImage(this)">
				<img src="images/ANIMAL_FEED/FEED_180/7.png" onclick="changeImage(this)">
            </div>
                </div>

                <button class="scroll-btn right" onclick="scrollThumbnails('right')">&#8594;</button>
            </div>
        </div>

        <!-- Product Details Section -->
        <div class="product-info">
            <h1 id="productTitle">FEED PELLET 180</h1>
            <p class="price" id="productPrice">LKR 169,000.00 Only</p>

            

            <div class="product-description">
    <h2>🔹 Feed Pellet Machine 180</h2>
    <ul>
      <li><span class="highlight">Compact and efficient pelletizing machine</span> ideal for small-scale feed production.</li>
      <li><span class="highlight">Output capacity of 180 kg per hour</span> – perfect for home use and small farms.</li>
      <li>Processes raw materials like <em>corn, bran, soybean meal, and grass</em> into uniform feed pellets.</li>
      <li>Suitable for a wide range of animals including <em>poultry, livestock, and fish</em>.</li>
      <li><span class="highlight">User-friendly design</span> ensures easy operation and maintenance.</li>
      <li>Offers <span class="highlight">low energy consumption</span> and dependable performance for daily use.</li>
      <li>Helps to improve feed quality, reduce waste, and minimize feeding costs.</li>
    </ul>
    <p><strong>Boost your feed efficiency with the Feed Pellet Machine 180 – small size, big results.</strong></p>
  </div>
</br>
           <?php include 'orderbtn.php'; ?>
		   
        </div>
		<?php $width = '10%'; include 'whychoose.php'; ?>
    </div>




    <script>
        function scrollThumbnails(direction) {
            const wrapper = document.querySelector('.thumbnail-wrapper');
            const scrollAmount = 200;

            if (direction === 'left') {
                wrapper.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                wrapper.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }

        function changeImage(image) {
            document.getElementById("mainImage").src = image.src;
        }
    </script>
<style>
    .thumbnail-scroll-container {
        display: flex;
        align-items: center;
        position: relative;
        width: 100%;
        margin-top: 20px;
        padding: 15px 20px;
        border-radius: 16px;
        backdrop-filter: blur(12px);
        background: rgba(255, 255, 255, 0.05);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        border: 1px solid rgba(255, 255, 255, 0.15);
    }

    .scroll-btn {
        background: rgba(0, 0, 0, 0.4);
        color: #00e5ff;
        border: 1px solid rgba(0, 229, 255, 0.4);
        font-size: 26px;
        cursor: pointer;
        padding: 10px 14px;
        border-radius: 50%;
        margin: 0 12px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 0 12px rgba(0, 229, 255, 0.3);
        backdrop-filter: blur(6px);
    }

    .scroll-btn:hover {
        background: rgba(0, 229, 255, 0.15);
        color: #ffffff;
        transform: scale(1.15);
        box-shadow: 0 0 20px #00e5ff, 0 0 10px #00e5ff;
    }

    .thumbnail-wrapper {
        overflow-x: auto;
        white-space: nowrap;
        flex-grow: 1;
        scroll-behavior: smooth;
        scrollbar-width: none; /* Firefox */
    }

    .thumbnail-wrapper::-webkit-scrollbar {
        display: none; /* Chrome, Safari */
    }

    .thumbnail-container {
        display: inline-block;
        white-space: nowrap;
    }

    .thumbnail-container img {
        height: 90px;
        margin-right: 15px;
        cursor: pointer;
        border-radius: 12px;
        transition: transform 0.4s ease, box-shadow 0.4s ease, border 0.3s ease;
        border: 2px solid rgba(0, 0, 0, 0.3);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .thumbnail-container img:hover {
        transform: scale(1.15) rotateZ(1deg);
        border-color: #00e5ff;
        box-shadow: 0 0 20px #00e5ff, 0 0 10px #00e5ff;
    }

    /* Optional: Add a selected-thumbnail class */
    .thumbnail-container img.selected {
        border-color: #00e5ff;
        box-shadow: 0 0 25px #00e5ff, 0 0 12px #00e5ff;
    }
</style>


       

	<!-- Company Advantages -->
	<?php include 'footer.php'; ?>
	
<!-- Company Advantages ------------------------------------------------------------------------------------------------------------------------------------------------------------->



</body>
</html>


