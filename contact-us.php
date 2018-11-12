<?php

if ($_POST['submit']) {
    $name = $_POST['name'];
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = 'From: ' . $from . "\r\n" .
        'Reply-To:' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $sent = mail('mariamsanneh63@yahoo.com', $subject, $message, $from, $headers);

    if ($sent) {
        $success = 'Data Successfully submitted';
    } else {
        $error = 'Failed, Sorry try again';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1, user-scaleable = no">
    <title>Contact us</title>
    <!--- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- Stylesheets -->
    <link rel="icon" href="images/logo.jpg">
</head>
<body>
<div class="navigation-about-page">
    <?php
    include "open_header.php"
    ?>
</div>
<div class="contact-container">
    <h3>Contact Us</h3>
    <div class="form-container1">
        <form method="post" action="">
            <input type="name" name="name" placeholder="Full Name" c required>
            <input type="email" name="email" placeholder="Email" required> <br>
            <input type="subject" name="subject" placeholder="Subject" required> <br>
            <textarea placeholder="Message..." name="message"></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if (isset($error)) {
            echo '<div style="font-size:16px; color:#cc0000; margin-top:10px">' . $error . '</div>';
        }
        if (isset($success)) {
            echo '<div style="font-size:16px; color:green; margin-top:10px">' . $success . '</div>';
        }
        ?>
    </div>
    <div class="information-container">
        <h3>Reach Us</h3>
        <p><i class="fa fa-phone"></i> +22030000001</p>
        <p><i class="fa fa-envelope"></i> info@example.com</p>
        <h3 class="address">Address</h3>
        <p><i class="fa fa-map-marker"></i> 14 example street <br>
            2315 Avenue <br>
            Building No. 5
        </p>
    </div>
</div>
<div class="footer-section">
    <div class="footer-container">
        <div class="copyright">
            <footer>&copy 2018 All Right Reserved. Helping Hand Foundation</footer>
        </div>
        <div class="social-media">
            <ul class="social-media-icons">
                <li><i id="icon" class="fa fa-facebook"></i></li>
                <li><i id="icon" class="fa fa-youtube"></i></li>
                <li><i id="icon" class="fa fa-instagram"></i></li>
                <li><i id="icon" class="fa fa-snapchat"></i></li>
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