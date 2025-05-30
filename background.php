<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbarm {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            padding: 15px 5%;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .navbarm .logom {
            display: flex;
            align-items: center;
            gap: 15px;
            z-index: 1001;
        }

        .navbarm .logom img {
            width: 50px;
            height: auto;
            transition: all 0.3s ease;
        }

        .navbarm .logom h1 {
            font-size: clamp(18px, 2vw, 26px);
            font-weight: bold;
            background: linear-gradient(45deg, #ff8c00, #ff4500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 10px rgba(255, 69, 0, 0.5);
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .navbarm a {
            color: white;
            text-decoration: none;
            padding: 12px 15px;
            font-size: clamp(14px, 1.5vw, 18px);
            transition: 0.3s;
            border-radius: 8px;
            white-space: nowrap;
        }

        .navbarm a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .dropdown {
            position: relative;
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
            z-index: 1002;
        }

        .dropdown-content a {
            display: block;
            padding: 12px;
            color: white;
            text-align: left;
            margin: 0;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .shop {
            background: linear-gradient(45deg, #ff8c00, #ff4500);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: clamp(14px, 1.5vw, 18px);
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(255, 69, 0, 0.5);
        }

        .shop:hover {
            background: linear-gradient(45deg, #ff4500, #ff8c00);
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(255, 69, 0, 0.7);
        }

        .menu-toggle {
            display: none;
            cursor: pointer;
            padding: 10px;
            color: white;
            font-size: 24px;
            z-index: 1001;
        }

        @media (max-width: 1024px) {
            .navbarm {
                padding: 15px 3%;
            }
            .nav-links {
                gap: 5px;
            }
            .navbarm a {
                padding: 10px 12px;
            }
            .shop {
                padding: 10px 20px;
            }
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .nav-links {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: rgba(0, 0, 0, 0.9);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 20px;
                transform: translateY(-100%);
                transition: transform 0.3s ease;
                padding-top: 80px;
            }

            .nav-links.active {
                transform: translateY(0);
                animation: slideDown 0.3s ease forwards;
            }

            .navbarm a, .dropdown {
                width: 80%;
                text-align: center;
                margin: 0;
            }

            .dropdown-content {
                position: static;
                width: 100%;
                box-shadow: none;
                background: rgba(0, 0, 0, 0.6);
                margin-top: 10px;
                display: none;
            }

            .dropdown.open .dropdown-content {
                display: block;
            }

            .dropdown-toggle::after {
                content: " ▼";
                font-size: 12px;
            }

            .shop {
                width: 100%;
                border-radius: 8px;
                text-align: center;
            }

            .navbarm .logom img {
                width: 40px;
            }
        }

        @media (min-width: 1600px) {
            .navbarm {
                padding: 20px 10%;
            }

            .nav-links {
                gap: 20px;
            }

            .navbarm a {
                padding: 15px 20px;
            }

            .navbarm .logom img {
                width: 60px;
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbarm">
        <div class="logom">
            <img src="images/graphic/LOGO.png" alt="Company Logo">
            <h1>HDB ENGINEERING LANKA</h1>
        </div>

        <div class="menu-toggle">☰</div>

        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="#contact">Contact</a>
            <div class="dropdown">
                <a href="#" class="shop dropdown-toggle">Shop Categories</a>
                <div class="dropdown-content">
                    <a href="rice-mills.php">Rice Mills</a>
                    <a href="fmills.php">Flour Mills</a>
                    <a href="dehydrators.php">Dehydrators</a>
                    <a href="animal-feed.php">Animal Feed</a>
                    <a href="filling-packetting.php">Filling and Packeting</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');
            const dropdown = document.querySelector('.dropdown');

            menuToggle.addEventListener('click', function () {
                navLinks.classList.toggle('active');
                document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : '';
            });

            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 768) {
                        navLinks.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                });
            });

            // Toggle dropdown on mobile
            const dropdownToggle = document.querySelector('.dropdown-toggle');
            if (dropdownToggle) {
                dropdownToggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    dropdown.classList.toggle('open');
                });
            }

            window.addEventListener('scroll', function () {
                const navbar = document.querySelector('.navbarm');
                const logo = document.querySelector('.navbarm .logom img');
                if (window.scrollY > 50) {
                    navbar.style.padding = '10px 5%';
                    logo.style.width = '40px';
                } else {
                    navbar.style.padding = '15px 5%';
                    logo.style.width = '50px';
                }
            });
        });
    </script>
</body>
</html>
