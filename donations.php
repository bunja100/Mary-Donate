<?php
include "Config/connect.php";

if ($_POST['submit']) {
    $name = $_POST['name'];
    $donation_type = $_POST['donation_type'];

    $sql = "INSERT INTO donations(name,donation_type) VALUES ('$name', '$donation_type')";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $success = 'Data Successfully submitted';
    } else
        $error = 'Failed, Sorry try again';

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1, userscaleable = no">
    <title>Donation</title>
    <!-- Stylesheets -->
<!--    <link rel="stylesheet" type="text/css" href="css/main.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- Stylesheets -->

    <!-- Icon -->
    <link rel="icon" href="images/logo.jpg">
    <!-- Icon -->

</head>
<body>
<div class="navigation-about-page">
    <?php
    include "header.php"
    ?>
</div>

<div class="donation-container">
    <!-- <h3>Donate Us</h3>
    <ul class="credit-card">
        <li><i class="fa fa-cc-visa"></i></li>
        <li><i class="fa fa-cc-mastercard"></i>
        </li>
        <li><i class="fa fa-credit-card"></i></li>
    </ul> -->
    <div class="form-container">
        <form action="" method="post">
            <label>NAME</label> <br>
            <input type="text" name="name" placeholder="Enter your name" required> <br><br>
            <!--<label>DONATION ID</label> <br>
            <input type="text" name="donation_id" placeholder="Enter ID" required> <br>-->
            <label>DONATION TYPE</label><br>
            <select placeholder="Select donation type" name="donation_type" id="d_type">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Ramadan Package">Ramadan Package</option>
                <option value="Business Package">Business Package</option>
                <option value="Family Support Package">Family Support Package</option>
            </select><br><br>

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