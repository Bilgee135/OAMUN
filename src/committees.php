<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Committees</title>
    <link rel="stylesheet" href="./styles/committees.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>

<body>
    <?php
    include './navbar.php';
    ?>
    <div class="hero-section"></div>
    <div class="container-1 row">
        <div class="container-2 col-lg-6">
            <div style="width: 100%; padding-left: 10%; padding-right: 10%" class="w-100 p-10%">
                <hr style="border-color: black; margin-bottom: 30px"/>
                <p class="rubik" style="font-size: 25px;">OAMUN Committees</p>
                <hr style="border-color: black; margin-top: 30px"/>
            </div>
        </div>
    </div>
    <div class="infocontainer-1 row" style="display: flex; justify-content: center;">
        <div class="accordion accordion-flush col-lg-11" id="accordionFlushExample">
            <div class="accordion-item" style="margin-bottom: 30px;">
                <h2 class="accordion-header">
                <button class="accordion-button no-border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    General Assemblies
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>GAs are the first committees at OAMUN. This year's in-person committees will try to simulate a real United Nations committee. Please expect difficulties.</p>
                    <p>Topic: Something something about someone being someone who we should accept</p>
                    <p>Chair: To Be Decided</p>
                    <p>Co-Chair: To Be Decided</p>
                </div>
                </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 30px;">
                <h2 class="accordion-header">
                <button class="accordion-button no-border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Economic and Social Council
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Currently, this committee does not exist in OAMUN.</div>
                </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 30px;">
                <h2 class="accordion-header">
                <button class="accordion-button no-border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Regional Bodies
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Currently, this committee does not exist in OAMUN.</div>
                </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 30px;">
                <h2 class="accordion-header">
                <button class="accordion-button no-border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    Specialized Agencies
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Currently, this committee does not exist in OAMUN.</div>
                </div>
            </div>
            <div class="accordion-item w-100 no-border" style="margin-bottom: 30px;">
            </div>
        </div>
    </div>
</body>

</html>