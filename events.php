<?php
include "Config/connect.php";

if ($_POST['submit']) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO events(event_name,event_date, event_time) VALUES ('$name', '$date', '$time')";
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
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
            <label>EVENT</label> <br>
            <input type="text" name="name" placeholder="Enter your name" required id="t_name"> <br><br>
            <label>DATE</label> <br>
            <input type="date" name="date" placeholder="Date" required id="d_type"> <br><br>
            <label>TIME</label><br>
            <input type="time" name="time" placeholder="Time" required id="d_type"> <br>
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

