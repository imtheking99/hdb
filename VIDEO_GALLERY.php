<html>
<head>
    <title>Light Video Gallery - Expanded</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: #f8f9fa;
            color: #333;
            padding: 20px;
            line-height: 1.6;
        }
        
        .video-gallery-section {
            max-width: 1400px; /* Wider container */
            margin: 0 auto;
            padding: 30px 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .video-gallery-section h2 {
            font-size: 2.2rem;
            margin-bottom: 30px;
            text-align: center;
            color: #2c3e50;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }
        
        .video-gallery-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #3498db;
            border-radius: 3px;
        }
        
        .video-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); /* More columns */
            gap: 20px; /* Tighter gap */
            margin-top: 30px;
        }
        
        .video-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            aspect-ratio: 16/9;
            background: #fff;
            border: 1px solid #e0e0e0;
        }
        
        .video-item:hover {
            transform: translateY(-3px); /* More subtle lift */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            border-color: #3498db;
        }
        
        .video-item iframe {
            width: 100%;
            height: 100%;
            border: none;
            transition: transform 0.3s ease;
        }
        
        .video-item:hover iframe {
            transform: scale(1.02);
        }
        
        .video-item::after {
            content: '▶';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgba(255, 255, 255, 0.8);
            font-size: 30px; /* Smaller play icon */
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .video-item:hover::after {
            opacity: 1;
        }
        
        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .video-gallery {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            }
        }
        
        @media (max-width: 992px) {
            .video-gallery {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .video-gallery {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 15px;
            }
            
            .video-gallery-section h2 {
                font-size: 1.8rem;
            }
        }
        
        @media (max-width: 576px) {
            .video-gallery {
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
                gap: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Video Gallery -->
    <div class="video-gallery-section">
        <h2>Video Gallery</h2>
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
            <div class="video-item">
                <iframe src="https://www.youtube.com/embed/HFT1LNoJUJ4?si=3VtuAv4ZCzF1lzQw" allowfullscreen></iframe>
            </div>
            <div class="video-item">
                <iframe src="https://www.youtube.com/embed/lexGLYOc8mk?si=48M30N6OxTdxaabb" allowfullscreen></iframe>
            </div>
            <div class="video-item">
                <iframe src="https://www.youtube.com/embed/boHFyfy1t_E?si=jgx_Cs55xNzVI6Nh" allowfullscreen></iframe>
            </div>
            <div class="video-item">
                <iframe src="https://www.youtube.com/embed/bZe6r-8R-cs?si=4LXg-HRo_nBi4-6h" allowfullscreen></iframe>
            </div>
            
        </div>
    </div>
</body>
</html>