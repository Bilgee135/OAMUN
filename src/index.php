<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAMUN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/index.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="apply-animation">
            <a href="#registerbutton">
                <h3>Apply</h3>
                <i class="fa-solid fa-angle-down"></i>
            </a>
        </div>
    </div>
    <div class="middle" id="info" style="margin-bottom: 150px;">
        <div class="about">
            <div class="welcome-text">
                <h1>Welcome to OAMUN!</h1>
                <p>
                    The Olonlog Academy Model United Nations (OAMUN) is a student-run conference that simulates the
                    United Nations. You will take the role of a delegate, representing a specific country or an organization,
                    and work collaboratively with others to tackle complex issues.
                </p>
                <h2>Why Participate?</h2>
                <p>
                <ul class="list1">
                    <li><b>Explore Global Issues</b>: Dive deep into topics such as war, poverty, sustainability and global security. </li>
                    <li><b>Develop Your Skills</b>: Enhance your critical thinking, public speaking, negotiation, manipulation, and research abilities.</li>
                    <li><b>Enrich Your College Application</b> While OAMUN may not offer direct university recognition, participating could equip you with the skills and experience needed to excel in other recognized conferences, including Ulaanbaatar MUN and even potentially Harvard MUN or Yale MUN. </li>
                </ul>
                </p>
            </div>

        </div>
        <div class="register-area">
            <div class="button-area" id="registerbutton">
                <hr>
                <h1>Apply</h1>
                <hr>
                <h3>Application deadline: March 2nd</h3>
                <a href="register.php">Apply</a>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>