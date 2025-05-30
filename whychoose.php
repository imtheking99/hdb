<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Why Choose Us?</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #f97316;
      --primary-light: #fb923c;
      --accent: #ea580c;
      --dark: #1e293b;
      --light: #ffffff;
      --card-bg: rgba(255, 255, 255, 0.98);
      --transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
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

    .advantages-section {
  padding: 5rem 1rem;
  position: relative;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
}
    .container {
      max-width: 1200px;
      margin: 0 auto;
      position: relative;
      z-index: 2;
    }

    .section-header {
      text-align: center;
      margin-bottom: 4rem;
      position: relative;
    }

    .section-header h2 {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 1.2rem;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      display: inline-block;
      position: relative;
    }

    .section-header h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 70px;
      height: 3px;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      border-radius: 2px;
    }

    .advantages-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      perspective: 1500px;
    }

    .advantage-card {
      background: var(--card-bg);
      border-radius: 1rem;
      padding: 2rem;
      box-shadow: 0 10px 30px rgba(249, 115, 22, 0.08);
      transition: var(--transition);
      position: relative;
      overflow: hidden;
      transform-style: preserve-3d;
      will-change: transform;
      border: 1px solid rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
    }

    .advantage-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(249, 115, 22, 0.05), rgba(234, 88, 12, 0.05));
      z-index: -1;
    }

    .advantage-card::after {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, var(--primary), var(--accent));
      z-index: -2;
      border-radius: 1.2rem;
      opacity: 0;
      transition: var(--transition);
    }

    .advantage-card:hover {
      transform: translateY(-6px) rotateX(2deg) rotateY(1deg) scale(1.015);
      box-shadow: 0 18px 50px rgba(249, 115, 22, 0.15);
    }

    .advantage-card:hover::after {
      opacity: 0.3;
      animation: borderPulse 3s infinite;
    }

    @keyframes borderPulse {
      0%, 100% { opacity: 0.3; }
      50% { opacity: 0.6; }
    }

    .card-icon {
      width: 140px;
      height: 140px;
      margin: 0 auto 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      background: white;
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(249, 115, 22, 0.1);
      position: relative;
      overflow: hidden;
      transition: var(--transition);
      transform-style: preserve-3d;
    }

    .card-icon::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, var(--primary), var(--accent));
      z-index: -1;
      border-radius: 1rem;
      opacity: 0;
      transition: var(--transition);
    }

    .advantage-card:hover .card-icon::before {
      opacity: 1;
      animation: rotateBorder 4s linear infinite;
    }

    @keyframes rotateBorder {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .card-icon img {
      max-width: 90%;
      max-height: 90%;
      object-fit: contain;
      transition: var(--transition);
      filter: drop-shadow(0 8px 20px rgba(0,0,0,0.1));
    }

    .advantage-card:hover .card-icon img {
      transform: scale(1.05) rotate(4deg);
      filter: drop-shadow(0 12px 25px rgba(0,0,0,0.2));
    }

    .card-content h3 {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: var(--dark);
      text-align: center;
      position: relative;
      display: inline-block;
      left: 50%;
      transform: translateX(-50%);
    }

    .card-content h3::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 50%;
      transform: translateX(-50%);
      width: 50px;
      height: 3px;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      border-radius: 2px;
      transition: var(--transition);
    }

    .advantage-card:hover .card-content h3::after {
      width: 70px;
    }

    .card-content p {
      color: #64748b;
      text-align: center;
      font-size: 0.95rem;
      line-height: 1.6;
      transition: var(--transition);
    }

    .advantage-card:hover .card-content p {
      color: var(--dark);
      transform: translateY(5px);
    }

    @keyframes float {
      0%, 100% { transform: translateY(0) rotateX(0deg) rotateY(0deg); }
      25% { transform: translateY(-12px) rotateX(3deg) rotateY(2deg); }
      50% { transform: translateY(-8px) rotateX(0deg) rotateY(-1deg); }
      75% { transform: translateY(-10px) rotateX(-2deg) rotateY(1deg); }
    }

    .float {
      animation: float 8s ease-in-out infinite;
    }

    .particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 1;
    }

    .particle {
      position: absolute;
      background: linear-gradient(45deg, var(--primary), var(--accent));
      border-radius: 50%;
      animation: floatParticle 15s infinite linear;
      opacity: 0.1;
    }

    @keyframes floatParticle {
      0% { transform: translateY(0) translateX(0); opacity: 0; }
      10% { opacity: 0.1; }
      90% { opacity: 0.1; }
      100% { transform: translateY(-500px) translateX(100px); opacity: 0; }
    }

    @media (max-width: 768px) {
      .advantages-section {
        padding: 4rem 1rem;
      }

      .section-header h2 {
        font-size: 1.9rem;
      }

      .advantages-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }

      .card-icon {
        width: 120px;
        height: 120px;
      }
    }
  </style>
</head>
<body>
  <section class="advantages-section">
    <div class="particles" id="particles"></div>
    <div class="container">
      <div class="section-header">
        <h2>Why Choose Us?</h2>
      </div>
      <div class="advantages-grid">
        <div class="advantage-card float">
          <div class="card-icon">
            <img src="images/graphic/adv2.gif" alt="Island Wide Delivery" loading="lazy">
          </div>
          <div class="card-content">
            <h3>Island Wide Delivery</h3>
            <p>We offer reliable and efficient island-wide delivery to ensure that your machinery and equipment reach your location promptly and safely, no matter where you are.</p>
          </div>
        </div>

        <div class="advantage-card float" style="animation-delay: 0.5s">
          <div class="card-icon">
            <img src="images/graphic/adv4.gif" alt="Best After Sale Service" loading="lazy">
          </div>
          <div class="card-content">
            <h3>Best After Sale Service</h3>
            <p>Our commitment to customer satisfaction extends beyond the sale with dedicated after-sales service. We provide timely maintenance, spare parts, and expert advice.</p>
          </div>
        </div>

        <div class="advantage-card float" style="animation-delay: 1s">
          <div class="card-icon">
            <img src="images/graphic/adv1.gif" alt="Best Technology" loading="lazy">
          </div>
          <div class="card-content">
            <h3>Best Technology</h3>
            <p>We utilize state-of-the-art technology in our manufacturing processes, ensuring that our machinery is durable, efficient, and designed with the latest innovations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    const particlesContainer = document.getElementById('particles');
    const particleCount = 25;

    for (let i = 0; i < particleCount; i++) {
      const particle = document.createElement('div');
      particle.classList.add('particle');

      const size = Math.random() * 6 + 4;
      particle.style.width = `${size}px`;
      particle.style.height = `${size}px`;

      particle.style.left = `${Math.random() * 100}%`;
      particle.style.top = `${Math.random() * 100 + 100}%`;

      const duration = Math.random() * 10 + 10;
      const delay = Math.random() * 10;
      particle.style.animationDuration = `${duration}s`;
      particle.style.animationDelay = `${delay}s`;

      particlesContainer.appendChild(particle);
    }
  </script>
</body>
</html>
