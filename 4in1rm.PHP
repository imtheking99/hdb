	<!DOCTYPE html>
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
            <img id="mainImage" src="images/RICE MILLS/4IN1/2.jpg" alt="4IN1 Rice Mill">
            <img id="zoomedImage" class="zoomed-image" src="images/RICE MILLS/4IN1/1.jpg" alt="Zoomed Image">

            <div class="thumbnail-scroll-container">
                <button class="scroll-btn left" onclick="scrollThumbnails('left')">&#8592;</button>
                
                <div class="thumbnail-wrapper">
                    <div class="thumbnail-container" id="thumbnailContainer">
                        <img src="images/RICE MILLS/4IN1/1.jpg" onclick="changeImage(this)">
                        <img src="images/RICE MILLS/4IN1/2.jpg" onclick="changeImage(this)">
                        <img src="images/RICE MILLS/4IN1/3.jpg" onclick="changeImage(this)">
                        <img src="images/RICE MILLS/4IN1/4.jpg" onclick="changeImage(this)">
                        <img src="images/RICE MILLS/4IN1/5.jpg" onclick="changeImage(this)">
                        
                    </div>
                </div>

                <button class="scroll-btn right" onclick="scrollThumbnails('right')">&#8594;</button>
            </div>
        </div>

        <!-- Product Details Section -->
        <div class="product-info">
            <h1 id="productTitle">4IN1 RICE MILL</h1>
            <p class="price" id="productPrice">LKR 506,000.00 Only</p>

            <div class="variations">
                <label for="model">Select Model:</label>
                <select id="model" onchange="updateProduct()">
                    <option value="standard">4IN1 Rice Mill</option>
                    <option value="mega">4IN1 MEGA PACK</option>
					<option value="combo">5IN1 COMBO PACK</option>
                    <option value="start">5IN1 START-UP PACK</option>
                </select>
            </div>

            <div class="product-description">
                <p id="productDescription">
                    The 4IN1 Rice Mill is a high-performance machine designed for small and medium-scale milling operations. 
                    It combines four essential functions: rice milling, grinding, husking, and polishing, making it an 
                    excellent choice for farmers and businesses. Compact, efficient, and built for durability.
                </p>
            </div>
</br>
           <?php include 'orderbtn.php'; ?>
		   
        </div>
		<?php $width = '10%'; include 'whychoose.php'; ?>
    </div>

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
	
</body>


    <script>
       // Function to update the product details based on selected model
function updateProduct() {
    const selectedModel = document.getElementById("model").value;
    const mainImage = document.getElementById("mainImage");
    const thumbnailContainer = document.getElementById("thumbnailContainer");
    const productTitle = document.getElementById("productTitle");
    const productDescription = document.getElementById("productDescription");
    const productPrice = document.getElementById("productPrice");

    if (selectedModel === "standard") {
        // Update for 4IN1 Rice Mill (Standard)
        productTitle.innerText = "4IN1 RICE MILL";
        productPrice.innerText = "LKR 506,000.00 Only";
        productDescription.innerHTML = "The 4IN1 Rice Mill is a high-performance machine designed for small and medium-scale milling operations. It combines four essential functions: rice milling, grinding, husking, and polishing, making it an excellent choice for farmers and businesses.";

        // Update thumbnails
        thumbnailContainer.innerHTML = `
            <img src="images/RICE MILLS/4IN1/1.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/4IN1/2.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/4IN1/3.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/4IN1/4.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/4IN1/5.jpg" onclick="changeImage(this)">
        `;

        // Set the first thumbnail as the main image immediately
        mainImage.src = "images/RICE MILLS/4IN1/2.jpg";
    } else if (selectedModel === "mega")  {
        // Update for 4IN1 Rice Mill Full Set
        productTitle.innerText = "4IN1 RICE MILL MEGA PACK";
        productPrice.innerText = "LKR 1,252,000.00 Only";
        productDescription.innerHTML = `
            <p>The <strong>4IN1 Rice MEGA PACK</strong> is a complete rice processing solution, designed for maximum efficiency and quality output. This set includes:</p>
            <ul>
                <li><strong>4IN1 Rice Mill:</strong> Combines milling, grinding, husking, and polishing functions in one compact unit.</li>
                <li><strong>JLX 280 Destoner:</strong> Removes stones, dirt, and other impurities to ensure clean rice processing.</li>
                <li><strong>Polisher Unit:</strong> Enhances the final rice quality, giving it a premium, polished finish.</li>
				<li><strong>Elevator:</strong> For easy paddy feeding.</li>
				<li><strong>FR 545 BAND SEALER:</strong> For sealing your products.</li>
				<li><strong>Bag closer:</strong> for seal up your final products like rice bags.</li>
				<li><strong>50kg and 150kg Scales:</strong> For Scale your products.</li>
				<li><strong>FREE 9FC2021 Grinding Mill:</strong> For your Extra Grinding needs.</li>
				<li><strong>Wiring Included:</strong> We provide precise and reliable wiring for every machine you buy, guaranteeing optimal performance and safety in every connection..</li>
            </ul>
            <p>Perfect for farmers, rice millers, and businesses looking for a powerful, all-in-one rice milling solution.</p>
        `;

        // Update thumbnails
        thumbnailContainer.innerHTML = `
            <img src="images/RICE MILLS/4IN1/2.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/5in1mega/13.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/5in1mega/16.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/5in1mega/19.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1mega/20.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1mega/25.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1mega/28.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1mega/32.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1mega/34.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1mega/39.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1mega/40.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1mega/43.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/4IN1fullset/4in1mega.jpg" onclick="changeImage(this)">

        `;

        // Set the first thumbnail as the main image immediately
        mainImage.src = "images/RICE MILLS/4IN1fullset/4in1mega.jpg";
    }else if (selectedModel === "combo")  {
        // Update for 4IN1 Rice Mill Full Set
        productTitle.innerText = "4IN1 RICE MILL COMBO PACK";
        productPrice.innerText = "LKR ,891,000.00 Only";
        productDescription.innerHTML = `
            <p>The <strong>4IN1 Rice MEGA PACK</strong> is a complete rice processing solution, designed for maximum efficiency and quality output. This set includes:</p>
            <ul>
                <li><strong>4IN1 Rice Mill:</strong> Combines milling, grinding, husking, and polishing functions in one compact unit.</li>
                <li><strong>JLX 280 Destoner:</strong> Removes stones, dirt, and other impurities to ensure clean rice processing.</li>
				<li><strong>Elevator or Polisher unit:</strong> you can choose Elevator For easy paddy feeding or Polisher Unit for Enhances the final rice quality, giving it a premium, polished finish. </li>
				<li><strong>FR 545 BAND SEALER:</strong> For sealing your products.</li>
				<li><strong> FREE Bag closer:</strong> for seal up your final products like rice bags.</li>
				<li><strong>FREE Steamer:</strong> For easy and effective paddy steaming.</li>
				<li><strong>Wiring Included:</strong> We provide precise and reliable wiring for every machine you buy, guaranteeing optimal performance and safety in every connection..</li>
            </ul>
            <p>Perfect for farmers, rice millers, and businesses looking for a powerful, all-in-one rice milling solution.</p>
        `;

        // Update thumbnails
        thumbnailContainer.innerHTML = `
            <img src="images/RICE MILLS/4IN1/2.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/5in1combo/2.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/5in1combo/6.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/5in1combo/9.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/5in1combo/10.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1combo/16.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1combo/20.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1combo/23.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1combo/25.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1combo/39.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/4IN1fullset/4in1comb.png" onclick="changeImage(this)">

        `;

        // Set the first thumbnail as the main image immediately
        mainImage.src = "images/RICE MILLS/4IN1fullset/4in1comb.png";
    }else if (selectedModel === "start")  {
        // Update for 4IN1 Rice Mill Full Set
        productTitle.innerText = "4IN1 RICE MILL START-UP PACK";
        productPrice.innerText = "LKR 701,000.00 Only";
        productDescription.innerHTML = `
            <p>The <strong>5IN1 Rice MEGA PACK</strong> is a complete rice processing solution, designed for maximum efficiency and quality output. This set includes:</p>
            <ul>
                <li><strong>5IN1 Rice Mill:</strong> Combines milling, grinding, husking, and polishing functions in one compact unit.</li>
                <li><strong>JLX 280 Destoner:</strong> Removes stones, dirt, and other impurities to ensure clean rice processing.</li>
			</ul>
        `;

        // Update thumbnails
        thumbnailContainer.innerHTML = `
            <img src="images/RICE MILLS/4IN1/2.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/4IN1/3.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/4IN1/4.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/4IN1/5.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/5in1start/20.jpg" onclick="changeImage(this)">
            <img src="images/RICE MILLS/5in1start/22.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/5in1start/24.jpg" onclick="changeImage(this)">
			<img src="images/RICE MILLS/4IN1fullset/4in1start.png" onclick="changeImage(this)">


        `;

        // Set the first thumbnail as the main image immediately
        mainImage.src = "images/RICE MILLS/4IN1fullset/4in1start.png";
    }
}

// Change main image on thumbnail click
function changeImage(image) {
    document.getElementById("mainImage").src = image.src;
}

// Remove zoom effect from main image (removed listeners for zoom effect)
document.getElementById("mainImage").removeEventListener("mousemove", zoomImage);
document.getElementById("mainImage").removeEventListener("mouseleave", hideZoomImage);

// Optional: If there is a zoomed image, hide it immediately
const zoomedImage = document.getElementById("zoomedImage");
if (zoomedImage) {
    zoomedImage.style.visibility = "hidden"; // Hide zoomed image if it exists
}

    </script>
 






	<!-- Company Advantages -->
	
	<?php include 'footer.php'; ?>
	
<!-- Company Advantages ------------------------------------------------------------------------------------------------------------------------------------------------------------->



</body>
</html>
