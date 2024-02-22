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
                <hr style="border-color: black; margin-bottom: 30px" />
                <p class="rubik text-center" style="font-size: 25px;">OAMUN Committees</p>
                <hr style="border-color: black; margin-top: 30px" />
            </div>
        </div>
    </div>
    <div class="infocontainer-1 row" style="display: flex; justify-content: center; margin-bottom: 110vh">
    <p style="color: rgb(100, 100, 100); font-style: italic">Note: The information below are subject to change.</p>
        <div class="accordion accordion-flush col-lg-11" id="accordionFlushExample">
            <div class="accordion-item" style="margin-bottom: 30px; margin-top: 30px">
                <h2 class="accordion-header">
                    <button class="accordion-button no-border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        General Assembly
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>"The UN General Assembly (UNGA) is the main policy-making organ of the Organization. Comprising all Member States, it provides a unique forum for multilateral discussion of the full spectrum of international issues covered by the Charter of the United Nations." - www.un.org</p>
                        <p><b>Topic(s):</b> Ensuring equitable access to quality education for all, particularly in conflict-affected regions</p>
                        <p><b>Chair:</b> Sod-Uchral</p>
                        <p><b>Co-Chair:</b> Khulan</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 30px;">
                <h2 class="accordion-header">
                    <button class="accordion-button no-border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Security Council
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>"The Security Council is one of the six main organs of the United Nations established under the UN Charter. Its primary responsibility is maintaining international peace and security." - www.un.org</p>
                        <p><b>Topic(s):</b> Enhancing cooperation to counter the threat of cyberattacks on critical infrastructure.</p>
                        <p><b>Chair:</b> Myagmarjargal</p>
                        <p><b>Co-Chair:</b> Bilguuntugs</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 30px;">
                <h2 class="accordion-header">
                    <button class="accordion-button no-border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        World Trade Organization (WTO)
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>"The World Trade Organization is a forum for governments to negotiate trade agreements, and a place where member governments try to sort out the trade problems they face with each other." - www.un.org</p>
                        <p><b>Topic(s):</b> Ensuring equitable access and distribution of space resources for the benefit of all Member States.</p>
                        <p><b>Chair:</b> Itgel</p>
                        <p><b>Co-Chair:</b> Tsatsral</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 30px;">
                <h2 class="accordion-header">
                    <button class="accordion-button no-border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                        United Nations Educational, Scientific and Cultural Organization (UNESCO)
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>"UNESCO's mission is to contribute to the building of a culture of peace, the eradication of poverty, sustainable development and intercultural dialogue through education, the sciences, culture, communication and information." - www.un.org</p>
                        <p><b>Topic(s):</b><br/> 1.	Promoting access to quality education and cultural resources for all; <br/>
2.	Addressing the ethical challenges posed by artificial intelligence in the field of education and culture.
</p>
                        <p><b>Chair:</b> Udval</p>
                        <p><b>Co-Chair:</b> Sain-Oyun</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 30px;">
                <h2 class="accordion-header">
                    <button class="accordion-button no-border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                        Human Rights Council
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>"The Human Rights Council is an intergovernmental body within the United Nations system made up of 47 States responsible for the promotion and protection of all human rights around the globe. It has the ability to discuss all thematic human rights issues and situations that require its attention throughout the year." - www.ohchr.org</p>
                        <p><b>Topic(s):</b><br/> 1.	Protecting the rights of refugees and asylum seekers; <br/>
2.	Promoting freedom of expression and access to information in the digital age
</p>
                        <p><b>Chair:</b> Erkhembileg</p>
                        <p><b>Co-Chair:</b> Namkhaidorj</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item w-100 no-border" style="margin-bottom: 30px;">
            </div>
        </div>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>

</html>