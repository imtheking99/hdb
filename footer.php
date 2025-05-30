<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cool Footer</title>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: #f2f2f2;
    }

    footer {
      background-color: #111;
      color: #fff;
      padding: 40px 20px;
      text-align: center;
      position: relative;
    }

    footer h3 {
      margin-bottom: 20px;
      font-size: 24px;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }

    .footer-content .about-us {
      flex: 1;
      min-width: 200px;
      margin-right: 20px;
    }

    .footer-content .social-icons {
      flex: 1;
      min-width: 200px;
      text-align: center;
    }

    .footer-content .social-icons a {
      color: #fff;
      margin: 0 10px;
      font-size: 20px;
      display: inline-block;
      transition: transform 0.3s, color 0.3s;
    }

    .footer-content .social-icons a:hover {
      color: #1da1f2;
      transform: scale(1.2);
    }

    .footer-bottom {
      margin-top: 20px;
      font-size: 14px;
      color: #aaa;
    }

    @media (max-width: 768px) {
      .footer-content {
        flex-direction: column;
        align-items: center;
      }
      .footer-content .about-us, .footer-content .social-icons {
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>

  <footer>
    <div class="footer-content">
      <div class="about-us">
        <h3>About Us</h3>
        <p>We are a leading company in our field, committed to providing the best products and services to our customers. Our passion for innovation and quality drives everything we do, and we strive to make a positive impact in the industry.</p>
      </div>
      <div class="social-icons">
        <h3>Connect With Us</h3>
        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025 www.hdb.lk | All Rights Reserved
    </div>
  </footer>

</body>
</html>
