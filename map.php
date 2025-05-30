<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Shop Location</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #4a6bff;
      --secondary: #ff6b6b;
      --dark: #2c3e50;
      --light: #f8f9fa;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #e0f2f1, #b2ebf2);
      min-height: 100vh;
      color: var(--dark);
    }

    .location-container {
      max-width: 800px;
      margin: 50px auto;
      padding: 40px;
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      border-radius: 25px;
      text-align: center;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      position: relative;
      overflow: hidden;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      z-index: 1;
    }

    .location-container::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(
        to bottom right,
        rgba(74, 107, 255, 0.1),
        rgba(255, 107, 107, 0.1)
      );
      transform: rotate(30deg);
      z-index: -1;
    }

    .location-container:hover {
      transform: translateY(-10px) scale(1.01);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    h2 {
      font-size: 2.5rem;
      color: var(--primary);
      margin-bottom: 15px;
      position: relative;
      display: inline-block;
      font-weight: 700;
    }

    h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: linear-gradient(to right, var(--primary), var(--secondary));
      border-radius: 2px;
    }

    .location-info {
      margin: 25px 0;
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .info-item {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 15px 0;
    }

    .info-item i {
      margin-right: 10px;
      color: var(--primary);
      font-size: 1.2rem;
    }

    .map {
      width: 100%;
      max-width: 700px;
      height: 400px;
      margin: 25px auto;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      position: relative;
      transition: all 0.4s ease;
    }

    .map:hover {
      transform: scale(1.02);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    iframe {
      width: 100%;
      height: 100%;
      border: 0;
      border-radius: 20px;
    }

    .cta-button {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 30px;
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      color: white;
      text-decoration: none;
      border-radius: 50px;
      font-weight: 600;
      box-shadow: 0 5px 15px rgba(74, 107, 255, 0.4);
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
      font-size: 1rem;
    }

    .cta-button:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(74, 107, 255, 0.6);
    }

    .social-links {
      margin-top: 30px;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .social-link {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.2rem;
      transition: all 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .social-link.facebook {
      background: #3b5998;
    }

    .social-link.instagram {
      background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
    }

    .social-link.whatsapp {
      background: #25D366;
    }

    .social-link:hover {
      transform: translateY(-3px) scale(1.1);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 768px) {
      .location-container {
        margin: 20px;
        padding: 25px;
      }

      h2 {
        font-size: 1.8rem;
      }

      .map {
        height: 250px;
      }
    }

    /* Animation for the container entrance */
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

    .location-container {
      animation: fadeInUp 0.8s ease-out forwards;
    }
  </style>
</head>
<body>
  <div class="location-container">
    <h2>Visit Our Shop</h2>
    
    <div class="location-info">
      <div class="info-item">
        <i class="fas fa-map-marker-alt"></i>
        <span>123 Business Street, Colombo, Sri Lanka</span>
      </div>
      <div class="info-item">
        <i class="fas fa-clock"></i>
        <span>Open Monday-Saturday: 9:00 AM - 6:00 PM</span>
      </div>
      <div class="info-item">
        <i class="fas fa-phone-alt"></i>
        <span>+94 11 234 5678</span>
      </div>
    </div>
    
    <div class="map">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1875.7713382139127!2d80.647871!3d7.869675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afca59ebeebe9fb%3A0xa4476ae464d5115f!2sHDB%20ENGINEERING%20LANKA!5e1!3m2!1sen!2slk!4v1743763974212!5m2!1sen!2slk" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
    

    
    <div class="social-links">
      <a href="https://www.facebook.com/profile.php?id=100064076083984" class="social-link facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/ltdhdbengineeringlankapvt/" class="social-link instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" class="social-link whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
  </div>
</body>
</html>