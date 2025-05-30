<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDB ENGINEERING LANKA - Rice Mills</title>
    <!-- Google Font - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #2ecc71;
            --dark: #1a252f;
            --light: #f8f9fa;
            --danger: #e74c3c;
            --warning: #f39c12;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            margin: 0;
            padding: 0;
            color: var(--dark);
        }
        
        /* Similar Products Section */
        #similarProducts {
            margin: 80px auto;
            max-width: 1400px;
            padding: 0 20px;
            perspective: 1000px;
        }
        
        .similar-products-heading {
            font-size: 3rem;
            font-weight: 700;
            text-align: center;
            color: var(--primary);
            margin-bottom: 60px;
            position: relative;
            padding-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .similar-products-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(46, 204, 113, 0.3);
        }
        
        .heading-subtext {
            display: block;
            font-size: 1rem;
            font-weight: 400;
            color: var(--secondary);
            margin-top: 10px;
            letter-spacing: 2px;
        }
        
        #similarProductsContainer {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            justify-items: center;
        }
        
        .similar-product {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            max-width: 320px;
            transform-style: preserve-3d;
            will-change: transform;
        }
        
        .similar-product::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary), var(--accent));
            z-index: 2;
        }
        
        .similar-product:hover {
            transform: translateY(-15px) rotateX(5deg);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .product-image-container {
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        
        .similar-product img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
        }
        
        .similar-product:hover img {
            transform: scale(1.1) rotate(1deg);
        }
        
        .product-info {
            padding: 25px;
            text-align: center;
            background: white;
            position: relative;
            z-index: 1;
        }
        
        .similar-product h4 {
            margin: 0 0 15px;
            font-size: 1.3rem;
            color: var(--primary);
            font-weight: 700;
            position: relative;
            display: inline-block;
        }
        
        .similar-product h4::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--accent);
            border-radius: 3px;
        }
        
        .price-tag {
            display: inline-block;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1rem;
            margin: 15px 0;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
            transition: all 0.3s ease;
        }
        
        .similar-product:hover .price-tag {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
        }
        
        .view-details {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 25px;
            background-color: transparent;
            color: var(--secondary);
            border: 2px solid var(--secondary);
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
            position: relative;
        }
        
        .view-details::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(52, 152, 219, 0.2), transparent);
            transition: all 0.6s ease;
        }
        
        .view-details:hover {
            background-color: var(--secondary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(52, 152, 219, 0.3);
        }
        
        .view-details:hover::before {
            left: 100%;
        }
        
        .view-details i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .view-details:hover i {
            transform: translateX(5px);
        }
        
        .product-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: var(--danger);
            color: white;
            padding: 6px 12px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 700;
            z-index: 1;
            box-shadow: 0 4px 10px rgba(231, 76, 60, 0.3);
            animation: pulse 2s infinite;
        }
        
        .product-features {
            margin: 15px 0;
            padding: 0;
            list-style: none;
            text-align: left;
        }
        
        .product-features li {
            margin-bottom: 8px;
            font-size: 0.9rem;
            position: relative;
            padding-left: 25px;
        }
        
        .product-features li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--accent);
        }
        
        .rating {
            margin: 10px 0;
            color: var(--warning);
            font-size: 0.9rem;
        }
        
        
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        #similarProducts {
            opacity: 0;
            animation: fadeInUp 0.8s 0.2s ease-out forwards;
        }
        
        /* Staggered animation for product cards */
        .similar-product {
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .similar-product:nth-child(1) { animation-delay: 0.3s; }
        .similar-product:nth-child(2) { animation-delay: 0.4s; }
        .similar-product:nth-child(3) { animation-delay: 0.5s; }
        .similar-product:nth-child(4) { animation-delay: 0.6s; }
        
        /* Responsive adjustments */
        @media (max-width: 1200px) {
            #similarProductsContainer {
                gap: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .similar-products-heading {
                font-size: 2.2rem;
            }
            
            #similarProductsContainer {
                grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            }
        }
        
        @media (max-width: 576px) {
            .similar-products-heading {
                font-size: 1.8rem;
            }
            
            .heading-subtext {
                font-size: 0.8rem;
            }
        }
        
        /* Floating particles background */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }
        
        .particle {
            position: absolute;
            background: rgba(52, 152, 219, 0.1);
            border-radius: 50%;
            animation: float linear infinite;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
            }
        }
        
        /* Floating action button */
        .fab {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 10px 25px rgba(46, 204, 113, 0.4);
            cursor: pointer;
            z-index: 100;
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
        }
        
        .fab:hover {
            transform: scale(1.1) rotate(15deg);
            box-shadow: 0 15px 30px rgba(46, 204, 113, 0.6);
        }
    </style>
</head>
<body>
    <!-- Floating particles background -->
    <div class="particles" id="particles"></div>
    
    <div id="similarProducts">
        <h3 class="similar-products-heading">HDB RICE MILLS COLLECTION
            <span class="heading-subtext">Premium Agricultural Machinery</span>
        </h3>
        
        <div id="similarProductsContainer">
            <!-- Similar product thumbnails will be dynamically loaded here -->
        </div>
    </div>
    
    <!-- Floating action button -->
    <div class="fab" id="contactFab">
        <i class="fas fa-phone-alt"></i>
    </div>

    <script>
        // Enhanced similar products data
        const similarProducts = [
            { 
                title: "5IN1 RICE MILL", 
                image: "images/RICE MILLS/5in1/1.jpg", 
                price: "LKR 860,000.00", 
                link: "5in1RM.php",
                badge: "Popular",
                features: [
                    "5 functions in one machine",
                    "High efficiency processing",
                    "Low power consumption",
                    "Durable stainless steel parts"
                ],
                rating: 5
            },
            { 
                title: "6N70 Rice Mill", 
                image: "images/RICE MILLS/6N70/1.jpg", 
                price: "LKR 400,000.00", 
                link: "#ricemill",
                badge: "Best Value",
                features: [
                    "Compact design",
                    "Easy operation",
                    "Low maintenance",
                    "Ideal for small farms"
                ],
                rating: 4
            },
            { 
                title: "6N1000 Rice Mill", 
                image: "images/RICE MILLS/6N1000/1.jpg", 
                price: "LKR 450,000.00", 
                link: "#multifunction",
                badge: "New Model",
                features: [
                    "High capacity processing",
                    "Advanced husking technology",
                    "Energy efficient",
                    "3-year warranty"
                ],
                rating: 5
            },
            { 
                title: "BBN 2023B RICE MILL", 
                image: "images/RICE MILLS/BBN2023B/1.jpg", 
                price: "LKR 50,000.00", 
                link: "#ricepolisher",
                badge: "Compact",
                features: [
                    "Portable design",
                    "Budget-friendly",
                    "Simple operation",
                    "Great for home use"
                ],
                rating: 3
            }
        ];

        // Function to render similar products
        function renderSimilarProducts() {
            const container = document.getElementById("similarProductsContainer");
            
            similarProducts.forEach(product => {
                const productDiv = document.createElement("div");
                productDiv.classList.add("similar-product", "animate__animated", "animate__fadeInUp");

                // Generate rating stars
                const stars = Array(product.rating).fill('<i class="fas fa-star"></i>').join('') + 
                             Array(5 - product.rating).fill('<i class="far fa-star"></i>').join('');
                
                // Generate features list
                const featuresList = product.features.map(feature => 
                    `<li>${feature}</li>`
                ).join('');
                
                productDiv.innerHTML = `
                    <div class="product-image-container">
                        <img src="${product.image}" alt="${product.title}" loading="lazy">
                        ${product.badge ? `<span class="product-badge">${product.badge}</span>` : ''}
                    </div>
                    <div class="product-info">
                        <h4>${product.title}</h4>
                        <div class="rating">${stars}</div>
                        <span class="price-tag">${product.price}</span>
                        <ul class="product-features">${featuresList}</ul>
                        <a href="${product.link}" class="view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                `;
                
                // Add hover effect with GSAP-like animation
                productDiv.addEventListener('mouseenter', () => {
                    productDiv.style.transform = 'translateY(-15px) rotateX(5deg)';
                    productDiv.style.boxShadow = '0 25px 50px rgba(0, 0, 0, 0.15)';
                });
                
                productDiv.addEventListener('mouseleave', () => {
                    productDiv.style.transform = 'translateY(0) rotateX(0)';
                    productDiv.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.1)';
                });
                
                container.appendChild(productDiv);
            });
        }

        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 30;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size between 5px and 15px
                const size = Math.random() * 10 + 5;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Random animation duration between 10s and 20s
                const duration = Math.random() * 10 + 10;
                particle.style.animationDuration = `${duration}s`;
                
                // Random delay
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                particlesContainer.appendChild(particle);
            }
        }

        // Contact FAB functionality
        function setupFAB() {
            const fab = document.getElementById('contactFab');
            fab.addEventListener('click', () => {
                alert('Contact HDB Engineering Lanka at: \nPhone: +94 76 123 4567 \nEmail: info@hdbengineering.lk');
            });
        }

        // Initialize everything when the page loads
        window.addEventListener('DOMContentLoaded', () => {
            renderSimilarProducts();
            createParticles();
            setupFAB();
            
            // Add scroll animation
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__fadeInUp');
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.similar-product').forEach(product => {
                observer.observe(product);
            });
        });
    </script>
</body>
</html>