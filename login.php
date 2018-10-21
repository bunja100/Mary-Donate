<?php
/**
 * Created by PhpStorm.
 * User: cayor
 * Date: 10/20/18
 * Time: 3:44 PM
 */
include "Config/connect.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($connection, $_POST['myusername']);
    $mypassword = mysqli_real_escape_string($connection, $_POST['mypassword']);

    $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['login_user'] = $myusername;

        header("location: index.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    <link rel="stylesheet" type="text/css" href="css/app.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <title>Login</title>
    <style>
        body {
            background-image: url("images/helping-hand.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            /*background: url(./images/helping-hand.jpg) no-repeat;*/
        }

        .container {
            margin-top: 10%;
        }

        .col-md-4 {
            background-color: whitesmoke;
            padding: 20px;
        }

    </style>
</head>
<body>

<div class="container charity-cover-photo">
    <img style="width: 10%" class="center-block img-circle" src="images/logo.jpg" alt="logo"><br><br>

    <div class="col-md-4 col-md-offset-4">
        <form action="" method="post">
            <h2 style="font-family: Garamond" class="text-center">Admin Login</h2><br>
            <div class="form-group has-feedback">
                <label for="">Username:</label>
                <input type="text" name="myusername" class="form-control" placeholder="Username..." required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <label for="">Password:</label>
                <input type="password" name="mypassword" class="form-control" placeholder="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <button class="btn btn-primary">Login</button>
            <a class="pull-right" href="index.php">Not Admin</a><br><br>
        </form>
        <div style="font-size:16px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

    </div>
</div>

</body>
</html>
