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

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donation Records</title>
</head>
<body style="background-color: white; margin-top: 5%">

<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <?php
        include "Config/connect.php";

        $sql = "SELECT * FROM donations";
        $result = mysqli_query($connection, $sql);
        $no = 1;
        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>Name</th>";
        echo "<th>Donation Type</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($rows = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td> $rows[name]</td>";
            echo "<td> $rows[donation_type]</td>";
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
