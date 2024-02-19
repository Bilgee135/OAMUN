<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAMUN</title>
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <div class="hero-section">
        <?php
        include 'navbar.php';
        ?>
        <div class="intro-text">
            <h1>OAMUN I</h1>
            <h3>March 16th, 2024</h3>
            <br>
        </div>
        <div style="display: flex; justify-content: center; width: 100%; position: absolute; bottom: 40px">
            <a href="#registerbutton" style="color: white; text-decoration: none"><h3 style="font-size: 20px; color: #ffbe02">Apply</h3></a> <!-- Eniig guitseeh -->
            <svg style="width: 20px; fill: #ffbe02" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
        </div>
    </div>
    <div class="middle" id="info">
        <div class="about">
            <div class="welcome-text">
                <h1>Welcome to OAMUN!</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae nisi sit amet nibh
                    congue congue. Ut sollicitudin sit amet ligula id blandit. Integer quis elementum nunc.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                    Sed eget urna vel elit fermentum rutrum a viverra magna. Praesent mollis sit amet quam sed
                    laoreet. Phasellus elementum diam et metus tristique eleifend. Suspendisse ornare ante vitae
                    placerat ultrices. Mauris nec viverra nibh. Cras tincidunt vulputate elit, a tempus elit sollicitudi
                    sit amet. Praesent augue ligula, aliquet sed leo sit amet, malesuada fringilla nulla.

                </p>
            </div>

        </div>
        <div class="register-area">
            <div class="button-area" id="registerbutton">
                <hr>
                <h1>Apply</h1>
                <hr>
                <h3>Application deadline: March 13th</h3>
                <a href="register.php">Apply</a>
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>

</html>