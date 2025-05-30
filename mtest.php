<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDB ENGINEERING LANKA</title>
    <!-- Google Font - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Base styles for all devices */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        
        /* Responsive image */
        img {
            max-width: 100%;
            height: auto;
        }
        
        /* Mobile-first media queries */
        @media only screen and (min-width: 768px) {
            /* Tablet and desktop styles */
            .header img {
                width: 100%;
            }
            
            /* Adjust other elements for larger screens */
        }
        
        @media only screen and (max-width: 767px) {
            /* Mobile-specific styles */
            br {
                display: none; /* Remove excess line breaks on mobile */
            }
            
            /* Adjust navbar spacing for mobile */
            body {
                padding-top: 60px; /* Adjust based on your navbar height */
            }
            
            /* Make sure embedded content fits mobile screens */
            iframe, video {
                max-width: 100%;
            }
        }
        
        @media only screen and (max-width: 480px) {
            /* Small mobile devices */
            /* Further adjustments if needed */
        }
    </style>
</head>
<body>
    <?php include 'navbar2.php'; ?>
    
    <!-- Optional: Add a mobile menu toggle if your navbar doesn't have one -->
    
    <div class="header">
        <img src="images/graphic/1.gif" alt="HDB ENGINEERING LANKA">
    </div>

    <!-- Main content sections -->
    <div class="content-wrapper">
        <?php $width = '10%'; include 'yolo.php'; ?>
        <?php $width = '10%'; include 'whychoose.php'; ?>
        <?php include 'cat.php'; ?>
        <?php include 'video_gallery.php'; ?>
        <?php include 'map.php'; ?>
    </div>
    
    <?php include 'footer.php'; ?>

    <!-- Optional: Add a viewport fix for older browsers -->
    <script>
        (function() {
            if (typeof navigator !== 'undefined' && navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style');
                msViewportStyle.appendChild(
                    document.createTextNode(
                        '@-ms-viewport{width:auto!important}'
                    )
                );
                document.querySelector('head').appendChild(msViewportStyle);
            }
        })();
    </script>
</body>
</html>