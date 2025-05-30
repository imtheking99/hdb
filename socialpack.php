<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Icon Pack</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            padding: 20px;
            background-color: #333;
        }
        .social-icons a {
            color: white;
            font-size: 24px;
            transition: transform 0.3s, color 0.3s;
        }
        .social-icons a:hover {
            transform: scale(1.2);
            color: #f39c12;
        }
        /* Optional: Hide span visually but keep for screen readers */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0,0,0,0);
            border: 0;
        }
    </style>
</head>
<body>
    <div class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=100064076083984" class="fab fa-facebook-f" title="Facebook" target="_blank" rel="noopener noreferrer">
            <span class="sr-only">Facebook</span>
        </a>
        <a href="https://twitter.com/your_username" class="fab fa-twitter" title="Twitter" target="_blank" rel="noopener noreferrer">
            <span class="sr-only">Twitter</span>
        </a>
        <a href="https://www.instagram.com/your_username/" class="fab fa-instagram" title="Instagram" target="_blank" rel="noopener noreferrer">
            <span class="sr-only">Instagram</span>
        </a>
        <a href="https://www.linkedin.com/in/your_username/" class="fab fa-linkedin-in" title="LinkedIn" target="_blank" rel="noopener noreferrer">
            <span class="sr-only">LinkedIn</span>
        </a>
        <a href="https://www.youtube.com/@your_channel" class="fab fa-youtube" title="YouTube" target="_blank" rel="noopener noreferrer">
            <span class="sr-only">YouTube</span>
        </a>
    </div>
</body>
</html>
