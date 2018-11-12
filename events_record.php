<?php
include "sessions.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donation Records</title>
    <style type="text/css">
        table{
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="navigation-about-page">
    <?php
    include "open_header.php"
    ?>
</div>

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <?php
        include "Config/connect.php";

        $sql = "SELECT * FROM events";
        $result = mysqli_query($connection, $sql);
        $no = 1;
        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>Event Name</th>";
        echo "<th>Date</th>";
        echo "<th>Time</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($rows = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td> $rows[event_name]</td>";
            echo "<td> $rows[event_date]</td>";
            echo "<td> $rows[event_time]</td>";
            echo "<td><a href='#'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>"

        ?>

        <a href="index.php" class="btn btn-primary">Back</a>
        <a href="logout.php" class="btn btn-primary pull-right">Logout</a>
    </div>
</div>

</body>
</html>
