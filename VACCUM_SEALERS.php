<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDB ENGINEERING LANKA | Premium Rice Mills</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <style>
        :root {
            --primary: #2e86de;
            --secondary: #10ac84;
            --accent: #ff9f43;
            --dark: #222f3e;
            --light: #f5f6fa;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            overflow-x: hidden;
        }
        
        /* Parallax Background Effect */
        .parallax-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(46, 134, 222, 0.1), rgba(16, 172, 132, 0.1));
            z-index: -1;
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }
        
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Main Container */
        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        /* Header Section */
        .page-header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .page-title {
            font-size: 3.5rem;
            font-weight: 800;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .page-subtitle {
            font-size: 1.2rem;
            color: var(--dark);
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.8;
        }
        
        /* Divider */
        .divider {
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            margin: 0 auto 40px;
            border-radius: 2px;
            position: relative;
            overflow: hidden;
        }
        
        .divider::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8), transparent);
            animation: shine 2s infinite;
        }
        
        @keyframes shine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        /* Product Card */
        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            z-index: 1;
            transform-style: preserve-3d;
            perspective: 1000px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(46, 134, 222, 0.1), rgba(16, 172, 132, 0.1));
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .product-card:hover::before {
            opacity: 1;
        }
        
        .product-image-container {
            flex: 1;
            min-height: 250px;
            overflow: hidden;
            position: relative;
        }
        
        .product-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover .product-image {
            transform: scale(1.05);
        }
        
        .product-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(255, 159, 67, 0.3);
            z-index: 2;
        }
        
        .product-info {
            padding: 20px;
            position: relative;
        }
        
        .product-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .product-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .product-price::before {
            content: 'LKR';
            font-size: 0.8rem;
            margin-right: 5px;
            opacity: 0.7;
        }
        
        .product-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .view-btn {
            padding: 10px 25px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(46, 134, 222, 0.3);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .view-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(46, 134, 222, 0.4);
        }
        
        .wishlist-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            border: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .wishlist-btn:hover {
            background: #ff6b6b;
            color: white;
            border-color: #ff6b6b;
        }
        
        /* Floating Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        
        .particle {
            position: absolute;
            background: rgba(46, 134, 222, 0.3);
            border-radius: 50%;
            animation: float linear infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-100vh) rotate(360deg); }
        }
        
        /* Footer */
        .page-footer {
            text-align: center;
            margin-top: 80px;
            padding: 30px 0;
            color: #666;
            font-size: 0.9rem;
        }
        
        .footer-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
            display: inline-block;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 1200px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        @media (max-width: 900px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .page-title {
                font-size: 2.8rem;
            }
        }
        
        @media (max-width: 600px) {
            .products-grid {
                grid-template-columns: 1fr;
            }
            
            .page-title {
                font-size: 2.2rem;
            }
            
            .page-subtitle {
                font-size: 1rem;
            }
            
            .product-image-container {
                min-height: 200px;
            }
        }
        
        /* Special Effects */
        .glow {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(46, 134, 222, 0.2), transparent 70%);
            filter: blur(20px);
            z-index: -1;
            animation: pulse 4s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.2); opacity: 0.8; }
        }
    </style>
</head>
<body>
    <!-- Parallax Background -->
    <div class="parallax-bg"></div>
    
    <!-- Floating Particles -->
    <div class="particles" id="particles"></div>
    
    <!-- Main Content -->
    <div class="main-container">
        <!-- Header -->
        <header class="page-header">
            <h1 class="page-title animate__animated animate__fadeInDown">Premium VACUUM SEALERS</h1>
            <p class="page-subtitle animate__animated animate__fadeIn animate__delay-1s">Discover our high-performance rice milling solutions engineered for efficiency and durability</p>
            <div class="divider animate__animated animate__fadeIn animate__delay-2s"></div>
        </header>
        
        <!-- Products Grid -->
        <div class="products-grid" id="similarProductsContainer">
            <!-- Products will be loaded here by JavaScript -->
        </div>
        
        <!-- Footer -->
        <footer class="page-footer animate__animated animate__fadeInUp animate__delay-3s">
            <div class="footer-logo">HDB ENGINEERING LANKA</div>
            <p>Quality Machinery for Modern Agriculture</p>
        </footer>
    </div>
    
    <!-- Glow Effects -->
    <div class="glow" style="top: 20%; left: 10%;"></div>
    <div class="glow" style="top: 70%; left: 80%; animation-delay: 1s;"></div>
    <div class="glow" style="top: 40%; left: 60%; animation-delay: 2s;"></div>

    <script>
        // Enhanced product data
        const similarProducts = [
            { 
                title: "VACUUM SEALER SY-260T", 
                image: "images/VACUUME_SEALERS/Vacuum_Packing_SY-260T/02.jpg", 
                price: "215,500.00", 
                link: "VS_260T.php",
                badge: "BESTSELLER",
                description: "Compact vacuum sealer for airtight food storage and freshness preservation—perfect for home or small business use."
            },
            { 
                title: "VACUUM SEALER SY-320T", 
                image: "images/VACUUME_SEALERS/Vacuum_Packing_SY-320T/02.jpg", 
                price: "235,500.00", 
                link: "VS_320T.php",
                badge: "MEDIUM USAGE",
                description: "Efficient and space-saving vacuum sealer for small businesses—perfect for sealing meats, dry goods, and daily food prep."
            },
            { 
                title: "VACUUM SEALER SY-400V", 
                image: "images/VACUUME_SEALERS/Vacuum_Packing_SY-400V/02.jpg", 
                price: "355,000.00", 
                link: "VS_400V.php",
                badge: "STAINLESS STEEL BODY",
                description: "Powerful floor-standing vacuum sealer for bulk food packaging—reliable performance for small factories and processors."
            },
			{ 
                title: "VACUUM SEALER SY-500T", 
                image: "images/VACUUME_SEALERS/Vacuum_Packing_SY-500T/02.jpg", 
                price: "455,500.00", 
                link: "VS_500T.php",
                badge: "STAINLESS STEEL BODY",
                description: "Tabletop vacuum sealer with wide sealing capacity—perfect for butchers, delis, and compact commercial spaces."
            },
			{ 
                title: "VACUUM SEALER SY-500V", 
                image: "images/VACUUME_SEALERS/Vacuum_Packing_SY-500V/03.jpg", 
                price: "465,000.00", 
                link: "VS_500V.php",
                badge: "STAINLESS STEEL BODY",
                description: "Heavy-duty floor model vacuum sealer with high capacity—designed for large-scale food and product packaging."
            },
			{ 
                title: "VACUUM SEALER SY-500Y", 
                image: "images/VACUUME_SEALERS/Vacuum_Packing_SY-500Y/06.jpg", 
                price: "485,000.00", 
                link: "VS_500Y.php",
                badge: "STAINLESS STEEL BODY",
                description: "Double-chamber vacuum sealer for high-speed, continuous sealing—ideal for busy food processing and industrial use."
            }
        ];

        // Create particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 30;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random properties
                const size = Math.random() * 10 + 5;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const duration = Math.random() * 20 + 10;
                const delay = Math.random() * 5;
                const opacity = Math.random() * 0.5 + 0.1;
                
                // Apply styles
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.animationDuration = `${duration}s`;
                particle.style.animationDelay = `${delay}s`;
                particle.style.opacity = opacity;
                
                // Random color
                const colors = ['rgba(46, 134, 222, 0.3)', 'rgba(16, 172, 132, 0.3)', 'rgba(255, 159, 67, 0.3)'];
                particle.style.background = colors[Math.floor(Math.random() * colors.length)];
                
                particlesContainer.appendChild(particle);
            }
        }

        // Render products
        function renderProducts() {
            const container = document.getElementById('similarProductsContainer');
            
            similarProducts.forEach((product, index) => {
                const productCard = document.createElement('div');
                productCard.className = `product-card animate__animated animate__fadeInUp animate__delay-${index * 0.2 + 1}s`;
                
                productCard.innerHTML = `
                    <div class="product-image-container">
                        <img src="${product.image}" alt="${product.title}" class="product-image" loading="lazy">
                        <span class="product-badge">${product.badge}</span>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">${product.title}</h3>
                        <p class="product-description">${product.description}</p>
                        <div class="product-price">${product.price}</div>
                        <div class="product-actions">
                            <button class="view-btn" data-link="${product.link}">
                                <i class="fas fa-eye"></i> View Details
                            </button>
                            <button class="wishlist-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                `;
                
                container.appendChild(productCard);
            });
        }

        // Initialize everything when page loads
        window.addEventListener('DOMContentLoaded', () => {
            createParticles();
            renderProducts();
            
            // Add click event to view buttons
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('view-btn') || e.target.closest('.view-btn')) {
                    const button = e.target.classList.contains('view-btn') ? e.target : e.target.closest('.view-btn');
                    const link = button.getAttribute('data-link');
                    if (link) {
                        window.location.href = link;
                    }
                }
            });
            
            // Add hover effect to product cards
            const cards = document.querySelectorAll('.product-card');
            cards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const x = e.clientX - card.getBoundingClientRect().left;
                    const y = e.clientY - card.getBoundingClientRect().top;
                    
                    const centerX = card.offsetWidth / 2;
                    const centerY = card.offsetHeight / 2;
                    
                    const angleX = (y - centerY) / 10;
                    const angleY = (centerX - x) / 10;
                    
                    card.style.transform = `rotateX(${angleX}deg) rotateY(${angleY}deg) translateY(-10px) scale(1.02)`;
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(-10px) scale(1.02)';
                    setTimeout(() => {
                        card.style.transform = '';
                    }, 300);
                });
            });
        });
    </script>
</body>
</html>