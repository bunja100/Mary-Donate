<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1, userscaleable = no">
    <title>Business Package</title>
    <!--- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!--- Stylesheet -->
    <link rel="icon" href="images/logo.jpg">
</head>
<body>
<div class="navigation-about-page">
    <?php
    include "open_header.php"
    ?>
</div>
<div class="package-container">
    <h1>Family Support Package</h1>
    <div class="package-content">
        <p>The HMD Comprehensive Family Support Package (CFSP) project aims at giving extremely needy families
            sustainable support in our quest to reduce poverty within our various societies.
            The package consists of a 6 - 12 months housing, feeding allowance, and a small scale business package. This
            business however will be monitored by our able volunteers and experts in the business field for a duration
            of one year so that these beneficiaries will be able to stand on their own at the end of the project</p>
        <div class="img-container">
            <img src="images/donation 15.jpg">
        </div>
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
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

<script type="text/javascript">
    $("#handle").click(function () {
        $("nav ul").toggleClass("showing");
    });
</script>
</body>
</html>