 <html>
 <head>
 <style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Navigation Bar */
.navbarm {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    background: rgba(0, 0, 0, 0.7);
    backdrop-filter: blur(10px);
    padding: 15px 20px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}

.navbarm a {
    color: white;
    text-decoration: none;
    padding: 12px 20px;
    font-size: 18px;
    transition: 0.3s;
    display: flex;
    align-items: center;
    margin-left: 20px;
}

/* Logo & Company Name Alignment */
.navbarm .logom {
    display: flex;
    align-items: center;
    position: absolute;
    left: 20px;
}

.navbarm .logom h1 {
    font-size: 26px;
    font-weight: bold;
    background: linear-gradient(45deg, #ff8c00, #ff4500);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-shadow: 2px 2px 10px rgba(255, 69, 0, 0.5);
    transition: all 0.3s ease-in-out;
    margin: 0;
}

/* Hover Effect */
.navbarm .logom h1:hover {
    transform: scale(1.1);
    text-shadow: 3px 3px 15px rgba(255, 69, 0, 0.8);
}

.navbarm a:hover {
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
    background: linear-gradient(45deg, #ff8c00, #ff4500);
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    font-size: 18px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 10px rgba(255, 69, 0, 0.5);
    text-align: center;
    display: inline-block;
}

.shop:hover {
    background: linear-gradient(45deg, #ff4500, #ff8c00);
    transform: scale(1.1);
    box-shadow: 0 6px 15px rgba(255, 69, 0, 0.7);
}



		</style>
		</head>
		<body>

 <!-- Navigation Bar -->
    <div class="navbarm">
        <div class="logom">
            <img src="images/graphic/LOGO.png" alt="Company Logo" style="width:7%"> <!-- Replace with actual logo path -->
            <h1>HDB ENGINEERING LANKA</h1>
        </div>
        <!-- Navigation Links (Centered) -->
        <a href="#home">Home</a>
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
	
	</body>
	</html>