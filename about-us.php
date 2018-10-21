<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale =1, userscaleable=no">
    <title>About our foundation</title>
    <!---Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!---Stylesheet-->
    <!-- Icon -->
    <link rel="icon" href="images/logo.jpg">
    <!-- Icon -->
</head>
<body>
<div class="navigation-about-page">
    <?php
    include "open_header.php"
    ?>
</div>

<div class="about-content">
    <div class="about-foundation">
        <h1>About our foundation</h1>
        <h4>Together We Shall Make a Difference</h4>
        <div class="p-container">
            <p>Our vision is to support needy families that are forgotten by the societies, to create an environment
                that will support them to be become self-reliant thereby contributing towards the existence of a better
                world.</p>
        </div>
        <a href="contact-us.php" class="get-in-touch">Get in Touch</a>
    </div>
    <h3>Gallery</h3>
    <div class="image-container">
        <img src="images/donation 1.jpg" width="300px" height="300px">
        <img src="images/donation 2.jpg" width="300px" height="300px">
        <img src="images/donation 3.jpg" width="300px" height="300px">
        <img src="images/donation 4.jpg" width="300px" height="300px">
        <img src="images/donation 5.jpg" width="300px" height="300px">
        <img src="images/donation 6.jpg" width="300px" height="300px">
        <img src="images/donation 7.jpg" width="300px" height="300px">
        <img src="images/donation 8.jpg" width="300px" height="300px">
    </div>
</div>
<div class="footer-section">
    <div class="footer-container">
        <div class="copyright">
            <footer>&copy 2018 All Right Reserved. Helping Hand Foundation</footer>
        </div>
        <div class="social-media">
            <ul class="social-media-icons">
                <li><i class="fa fa-facebook"></i></li>
                <li><i class="fa fa-youtube"></i></li>
                <li><i class="fa fa-instagram"></i></li>
                <li><i class="fa fa-snapchat"></i></li>
            </ul>
        </div>
    </div>
</div>
<!-- Scripts -->
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

<script type="text/javascript">
    $("#handle").click(function () {
        $("nav ul").toggleClass("showing");
    });
</script>

</body>
</html>