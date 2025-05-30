<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDB ENGINEERING LANKA</title>
	 <!-- Google Font - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        /* Body Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('wholeb.jpg') no-repeat center center fixed;
            background-size: cover;
			body {
    background: url('https://www.toptal.com/designers/subtlepatterns/patterns/diagonal_stripes.png');
    font-family: 'Poppins', sans-serif;
    color: #fff;
}

        }

        /* Header Styles */
        .header {
            background: url('header-bg.jpg') no-repeat center center/cover;
            color: #fff;
            padding: 80px 20px 20px;
            text-align: center;
            font-size: 24px;
            position: relative;
            margin-top: 50px; /* Adjust for fixed navbar */
        }

        /* Navigation Bar */
			   .navbar {
			display: flex;
			justify-content: flex-end; /* Align navigation buttons to the right */
			align-items: center;
			background: rgba(0, 0, 0, 0.7);
			backdrop-filter: blur(10px);
			padding: 15px 20px;
			position: fixed;
			top: 0;
			width: 100%;
			z-index: 1000;
		}
		.navbar a {
		color: white;
		text-decoration: none;
		padding: 12px 20px;
		font-size: 18px;
		transition: 0.3s;
		display: flex;
		align-items: center;
		margin-left: 20px; /* Adjust this value to move buttons to the right */
	}


       /* Company Name Styling */
		/* Logo & Company Name Alignment */
		.navbar .logo {
			display: flex;
			align-items: center;
			position: absolute;
			left: 20px; /* Align to the left */
		}

		/* Company Name Styling */
		.navbar .logo h1 {
			font-size: 26px;
			font-weight: bold;
			background: linear-gradient(45deg, #ff8c00, #ff4500);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			text-transform: uppercase;
			letter-spacing: 2px;
			text-shadow: 2px 2px 10px rgba(255, 69, 0, 0.5);
			transition: all 0.3s ease-in-out;
			margin: 0; /* Remove extra margin */
		}

		/* Hover Effect */
		.navbar .logo h1:hover {
			transform: scale(1.1);
			text-shadow: 3px 3px 15px rgba(255, 69, 0, 0.8);
		}


        /* Navigation Links */
        .navbar a, .dropdown {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 18px;
            transition: 0.3s;
            display: flex;
            align-items: center;
        }

        .navbar a:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
        }

        /* Dropdown Menu */
        .dropdown {
            position: relative;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background: rgba(0, 0, 0, 0.8);
            min-width: 200px;
            top: 100%;
            left: 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .dropdown-content a {
            display: block;
            padding: 12px;
            color: white;
            text-align: left;
            transition: 0.3s;
        }

        .dropdown-content a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
		/* Shop Categories Button */
		.shop {
			background: linear-gradient(45deg, #ff8c00, #ff4500); /* Gradient effect */
			color: white;
			padding: 12px 25px;
			border-radius: 25px;
			font-size: 18px;
			font-weight: bold;
			transition: all 0.3s ease-in-out;
			box-shadow: 0 4px 10px rgba(255, 69, 0, 0.5); /* Glow effect */
			text-align: center;
			display: inline-block;
		}

		/* Hover Effect */
		.shop:hover {
			background: linear-gradient(45deg, #ff4500, #ff8c00); /* Reverse gradient */
			transform: scale(1.1); /* Slightly enlarge */
			box-shadow: 0 6px 15px rgba(255, 69, 0, 0.7);
		}


        /* Hero Section (Slideshow) */
		.hero {
			position: relative;
			width: 100%;
			height: 450px; /* Adjust height to fit like a cover photo */
			overflow: hidden;
			display: flex;
			align-items: center;
			justify-content: center;
			background: black; /* Prevent white gaps */
		}

		.slideshow-container {
			width: 100%;
			height: 100%;
			position: relative;
		}

		.mySlides {
			display: none;
			width: 100%;
			height: 100%;
			position: absolute;
		}

		.mySlides img {
			width: 100%;
			height: 100%;
			object-fit: cover; /* Ensures images behave like cover photos */
		}

		/* Slideshow Text */
		.text {
			position: absolute;
			bottom: 10px;
			left: 50%;
			font-family: 'Poppins', sans-serif;
			transform: translateX(-50%);
			font-size: 58px;
			font-weight: 700;
			color: #2c3e50;
			/*text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);*/
			text-align: center;
			opacity: 0;
			animation: fadeIn 1s forwards;
			animation-delay: 1.5s;
			/*background-color: white;  White background box */
			/*padding: 10px 20px; /* Adds padding inside the box */
			border-radius: 10px; /* Optional: adds rounded corners to the box */
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Optional: adds a subtle shadow to the box */
		}
		

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(20px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}


       /* Categories Section */
		.container {
			width: 85%;
			margin: 40px auto;
			background: rgba(255, 255, 255, 0.1);
			padding: 30px;
			border-radius: 12px;
			backdrop-filter: blur(10px);
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
		}

		.categories {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
			gap: 25px;
			padding: 20px;
		}

		.category {
			width: 260px;
			background: rgba(255, 255, 255, 0.2);
			padding: 25px;
			border-radius: 15px;
			text-align: center;
			box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
			transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
			position: relative;
			overflow: hidden;
		}

		/* Remove Underline from Category Links */
		.category a {
			text-decoration: none; /* Removes underline */
			display: block; /* Ensures the entire category is clickable */
			color: inherit; /* Inherits text color */
		}

		.category:hover {
			transform: scale(1.08);
			box-shadow: 0 15px 30px rgba(255, 140, 0, 0.5);
		}

		.category img {
			width: 100%;
			height: auto;
			border-radius: 12px;
			transition: transform 0.3s ease-in-out;
		}

		.category:hover img {
			transform: scale(1.05);
		}

		.category h3 {
			margin-top: 12px;
			font-size: 20px;
			color: #ff4500;
			font-weight: bold;
			text-transform: uppercase;
		}


        .contact {
            text-align: center;
            padding: 20px;
            background: #333;
            color: #fff;
        }
		/* About Us Section */
		.about {
			 background: linear-gradient(45deg, #ff8c00, #ff4500); /* Gradient effect */
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    font-size: 18px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 10px rgba(255, 69, 0, 0.5); /* Glow effect */
    text-align: center;
		}

		--------------------------------------
		/* Company Advantages Section */
		.advantages {
			background-color: #f4f4f4;
			padding: 50px 0;
			margin-top: 20px; /* Prevent overlap with previous sections */
		}

		.advantages h2 {
			text-align: center;
			font-size: 28px;
			color: #333;
			margin-bottom: 30px;
			font-weight: 600;
			letter-spacing: 1px;
			text-transform: uppercase;
			position: relative;
		}

		.advantages h2::after {
			content: "";
			position: absolute;
			width: 80px;
			height: 3px;
			background: #ff4500;
			bottom: -10px;
			left: 50%;
			transform: translateX(-50%);
		}

		.advantage-list {
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
			gap: 30px;
			text-align: center;
		}

		.advantage {
			width: 250px;
			background-color: white;
			padding: 25px;
			border-radius: 10px;
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
			text-align: center;
			position: relative;
			overflow: hidden;
			background: linear-gradient(135deg, #fff, #f9f9f9);
		}

		.advantage:hover {
			transform: translateY(-10px);
			box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
		}

		.advantage img {
			margin-bottom: 15px;
			transition: transform 0.3s ease-in-out;
			border-radius: 50%;
		}

		.advantage:hover img {
			transform: scale(1.1);
		}

		.advantage h3 {
			font-size: 20px;
			color: #ff4500;
			font-weight: bold;
			margin-bottom: 15px;
		}

		.advantage p {
			color: #666;
			font-size: 16px;
			line-height: 1.5;
			transition: color 0.3s ease;
		}

		/* Hover effect for description text */
		.advantage:hover p {
			color: #444;
		}

		/* Animations for Advantage Section */
		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(30px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.advantage {
			animation: fadeInUp 0.7s ease-out;
		}

		/* Create a nice hover background for the whole section */
		.advantages:hover {
			background-color: #e6e6e6;
			transition: background-color 0.5s ease;
		}
		------------------------------------------------------------------------------------------------------------ player gallery
		



    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <img src="images/graphic/page cover.jpg" alt="HDB ENGINEERING LANKA">
    </div>

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="logo">
            <img src="images/graphic/LOGO.png" alt="Company Logo" style="width:7%"> <!-- Replace with actual logo path -->
            <h1>HDB ENGINEERING LANKA</h1>
        </div>
        <!-- Navigation Links (Centered) -->
        <a href="index.html">Home</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact</a>
        <div class="dropdown">
            <a href="#" class="shop">Shop Categories</a>
            <div class="dropdown-content">
                <a href="rice-mills.html">Rice Mills</a>
                <a href="fmills.html">Flour Mills</a>
                <a href="dehydrators.html">Dehydrators</a>
                <a href="animal-feed.html">Animal Feed</a>
                <a href="filling-packetting.html">Filling and Packeting</a>
            </div>
        </div>
    </div>

    <!-- Hero Section (Slideshow) -->
    <div class="hero">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="images/slide/slide 01.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <img src="images/slide/slide 01.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <img src="images/slide/slide 01.jpg" style="width:100%">
                <div class="text"></div>
            </div>
        </div>
    </div>
	
	


<!---------------------------------------------------------------categories------------------------------------------------------------------------------------------------>

    <div class="container">
    <div class="categories">
        <div class="category">
            <a href="9fc2021gm.html">
                <img src="images/RICE MILLS/5in1/1.jpg" alt="RICE MILLS">
                <h3>9FC 2021 GRINDING MILL</h3>
            </a>
        </div>
		<div class="category">
            <a href="ufgm.html">
                <img src="images/RICE MILLS/4IN1/4.jpg" alt="FLOUR MILLS">
                <h3>HDB ULTRAFINE ONESHOT</h3>
            </a>
        </div>
        <div class="category">
            <a href="6n1000RM.html">
                <img src="images/RICE MILLS/6N1000/4.jpg" alt="FLOUR MILLS">
                <h3>6N1000 RICE MILL</h3>
            </a>
        </div>
        <div class="category">
            <a href="6n70RM.html">
                <img src="images/RICE MILLS/6N70/4.jpg" alt="DEHYDRATORS">
                <h3>6N70 RICE MILL</h3>
            </a>
        </div>
        <div class="category">
            <a href="bbn2023BRM.html">
                <img src="images/RICE MILLS/BBN2023B/4.jpg" alt="ANIMAL FEED">
                <h3>BBN 2023B RICE MILL</h3>
            </a>
        </div>
        <div class="category">
            <a href="bbn2023cRM.html">
                <img src="images/RICE MILLS/BBN2023C/4.jpg" alt="FILLING AND PACKETING">
                <h3>BBN 2023 C RICE MILL</h3>
            </a>
        </div>
    </div>
</div>

	<!-- Company Advantages -->
	
	
<!-- Company Advantages ------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="advantages">
    <h2>Why Choose Us?</h2>
    <div class="advantage-list">
        <div class="advantage">
            <img src="images/graphic/adv2.gif" alt="Advantage 1" width="40%">
            <h3>ISLAND WIDE DELIVERY</h3>
            <p>"We offer reliable and efficient island-wide delivery to ensure that your machinery and equipment reach your location promptly and safely, no matter where you are."</p>
        </div>
        <div class="advantage">
            <img src="images/graphic/adv4.gif" alt="Advantage 2" width="40%">
            <h3>BEST AFTER SALE SERVICE</h3>
            <p>"Our commitment to customer satisfaction extends beyond the sale with dedicated after-sales service. We provide timely maintenance, spare parts, and expert advice to keep your equipment running smoothly."</p>
        </div>
        <div class="advantage">
            <img src="images/graphic/adv1.gif" alt="Advantage 3" width="40%">
            <h3>BEST TECHNOLOGY</h3>
            <p>"We utilize state-of-the-art technology in our manufacturing processes, ensuring that our machinery is durable, efficient, and designed with the latest innovations to meet your business needs."</p>
        </div>
    </div>
</div>

<style>
    /* Container */
    .advantages {
        background: #f8f9fa;
        padding: 40px 15px;
        text-align: center;
    }

    .advantages h2 {
        font-size: 28px;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 20px;
        font-family: 'Poppins', sans-serif;
    }

    /* Advantage List */
    .advantage-list {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 15px;
    }

    .advantage {
        background-color: #ffffff;
        border-radius: 8px;
        padding: 15px;
        width: 28%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }

    .advantage:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .advantage img {
        width: 20%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 12px;
    }

    .advantage h3 {
        font-size: 20px;
        font-weight: 600;
        color: #34495e;
        margin-bottom: 8px;
        font-family: 'Poppins', sans-serif;
    }

    .advantage p {
        font-size: 14px;
        color: #7f8c8d;
        line-height: 1.5;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .advantage {
            width: 45%;
        }
    }

    @media (max-width: 380px) {
        .advantage {
            width: 100%;
        }
    }
	
	
</style>


<!-- GALLERY -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* General Styles */
        body.v {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #111;
            color: white;
            text-align: center;
        }

        h2 {
            font-size: 32px;
            margin-top: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
        }

        /* Video Gallery Container */
        .video-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 30px;
            justify-items: center;
        }

        /* Video Items (Glassmorphism effect) */
        .video-item {
            width: 90%;
            max-width: 350px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s;
            overflow: hidden;
        }

        .video-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8);
        }

        .video-item iframe {
            width: 100%;
            height: 200px;
            border-radius: 8px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .video-gallery {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .video-item {
                width: 95%;
            }
        }
    </style>


    <h2 align="center">🎥 Video Gallery</h2>

    <div class="video-gallery">
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/rQUtqmGVb7E?si=aymJUevbsdVskQ4M" allowfullscreen></iframe>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/2OK2Q54Fw4U?si=jVU9p83FxpI-I5hA" allowfullscreen></iframe>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/R0CI-zGoa6g?si=hbrjXpXGfWjpiDZ3" allowfullscreen></iframe>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/T4W0rVptVmQ?si=LA-uB6fleIsZsFru" allowfullscreen></iframe>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/qHd4rwtMECU?si=ERT3dVItepbEkuB4" allowfullscreen></iframe>
        </div>
        <div class="video-item">
            <iframe src="https://www.youtube.com/embed/dFE0_lOxy5w?si=wiVti9tCmD5YibUY" allowfullscreen></iframe>
        </div>
    </div>







    <!-- Contact Section -->
    <div class="about">
        <div class="about">
            <h2>About Us</h2>
            <p>Empower entrepreneurs in Sri Lanka with high-quality self-employment equipment, enhancing productivity and supporting sustainable business growth.</p>
        </div>
        <p>Contact us at info@hdb.lk | 070 211 3958</p>
    </div>

    <script>
        let slideIndex = 0;

        function showSlides() {
            let slides = document.getElementsByClassName("mySlides");
            let texts = document.querySelectorAll(".text");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
                texts[i].style.opacity = "0"; // Hide text when the slide is hidden
            }

            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }

            slides[slideIndex - 1].style.display = "block";  
            texts[slideIndex - 1].style.opacity = "1"; // Fade-in text of the active slide

            setTimeout(showSlides, 5000); // Change slide every 5 seconds
        }

        showSlides();
    </script>

</body>
</html>
