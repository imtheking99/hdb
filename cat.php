<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0"/>
  <title>Cool Product Categories</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #fefefe, #f9f2ec);
      color: #333;
      line-height: 1.6;
      padding-bottom: 20px;
    }

    .section-title {
      text-align: center;
      font-size: clamp(1.5rem, 5vw, 2.5rem);
      color: #ff4500;
      margin: 40px 20px 10px;
      font-weight: 600;
      text-transform: uppercase;
      position: relative;
      padding-bottom: 15px;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: linear-gradient(90deg, #ff4500, #ff8c00);
    }

    .categories-container {
      width: 95%;
      max-width: 1300px;
      margin: 0 auto 60px;
      background: rgba(255, 255, 255, 0.3);
      padding: 20px;
      border-radius: 16px;
      backdrop-filter: blur(10px);
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
    }

    .categories {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 20px;
      padding: 10px;
    }

    .category {
      background: rgba(255, 255, 255, 0.3);
      padding: 15px;
      border-radius: 18px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .category::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(255,69,0,0.1), rgba(255,140,0,0.1));
      z-index: -1;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .category:hover::before {
      opacity: 1;
    }

    .category a {
      text-decoration: none;
      color: inherit;
      display: block;
    }

    .category:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 20px 35px rgba(255, 140, 0, 0.4);
    }

    .category img {
      width: 100%;
      height: 180px;
      object-fit: contain;
      border-radius: 12px;
      transition: transform 0.3s ease;
      background: white;
      padding: 10px;
    }

    .category:hover img {
      transform: scale(1.04);
    }

    .category h3 {
      margin-top: 15px;
      font-size: clamp(16px, 2.5vw, 20px);
      color: #ff5722;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      transition: color 0.3s ease;
    }

    .category:hover h3 {
      color: #ff4500;
    }

    /* Loading animation for images */
    .category img {
      background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
      background-size: 200% 100%;
      animation: loading 1.5s infinite;
    }

    @keyframes loading {
      0% { background-position: 200% 0; }
      100% { background-position: -200% 0; }
    }

    @media (max-width: 768px) {
      .categories {
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 15px;
      }
      
      .category {
        padding: 12px;
      }
      
      .category img {
        height: 140px;
      }
    }

    @media (max-width: 480px) {
      .categories {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 12px;
      }
      
      .category {
        padding: 10px;
      }
      
      .category img {
        height: 120px;
      }
      
      .section-title {
        margin: 30px 10px 5px;
        font-size: 1.8rem;
      }
      
      .categories-container {
        padding: 15px;
      }
    }

    @media (max-width: 360px) {
      .categories {
        grid-template-columns: 1fr 1fr;
      }
    }
  </style>
</head>
<body>

  <h2 class="section-title">Explore Our Product Categories</h2>

  <div class="categories-container">
    <div class="categories">
      <div class="category">
        <a href="rice-mills.php">
          <img src="images/catimages/1.png" alt="Rice Mills" loading="lazy"/>
          <h3>Rice Mills</h3>
        </a>
      </div>
      <div class="category">
        <a href="G_MILLS_list.php">
          <img src="images/catimages/2.png" alt="Flour Mills" loading="lazy"/>
          <h3>Flour Mills</h3>
        </a>
      </div>
	  <div class="category">
        <a href="SEALERS_LIST.php">
          <img src="images/catimages/4.png" alt="BAND SEALERS" loading="lazy"/>
          <h3>BAND SEALERS</h3>
        </a>
      </div>
	  <div class="category">
        <a href="VS_LIST.php">
          <img src="images/catimages/9.png" alt="Filling & Packing" loading="lazy"/>
          <h3>VACUUM SEALERS</h3>
        </a>
      </div>
      <div class="category">
        <a href="dehydrators.php">
          <img src="images/catimages/3.png" alt="Dehydrators" loading="lazy"/>
          <h3>Dehydrators</h3>
        </a>
      </div>
      <div class="category">
        <a href="A_FEED_LIST.php">
          <img src="images/catimages/5.png" alt="Animal Feed" loading="lazy"/>
          <h3>Animal Feed</h3>
        </a>
      </div>
      <div class="category">
        <a href="filling-packetting.php">
          <img src="images/catimages/9.png" alt="Filling & Packing" loading="lazy"/>
          <h3>Filling & Packing</h3>
        </a>
      </div>
      <div class="category">
        <a href="filling-packetting.php">
          <img src="images/catimages/4.png" alt="Food Slicers" loading="lazy"/>
          <h3>Food Slicers</h3>
        </a>
      </div>
      <div class="category">
        <a href="filling-packetting.php">
          <img src="images/catimages/11.png" alt="Water Pumps" loading="lazy"/>
          <h3>Water Pumps</h3>
        </a>
      </div>
    </div>
  </div>

</body>
</html>