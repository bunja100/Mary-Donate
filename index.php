
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale =1, userscaleable=no">
    <title>Helping Hand Charity Foundation</title>
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!--Stylesheet-->
    <!-- Icon -->
    <link rel="icon" href="images/logo.jpg">
    <!-- Icon -->


</head>
<body>

<div class="container">
    <?php
    include "open_header.php"
    ?>
</div>

<!--Script-->
<script type="text/javascript">
    var index = 0;
    var words_array = ["HELPING HAND CHARITY FOUNDATION", "HELPING TO MAKE A DIFFERENCE"];
    var elem;

    function increment() {
        index++;
        elem.style.opacity = 0;
        if (index > (words_array.length - 1)) {
            index = 0;
        }
        setTimeout('word_slide()', 1000);
    }

    function word_slide() {
        elem.innerHTML = words_array[index];
        elem.style.opacity = 1;
        setTimeout('increment()', 2000);
    }
</script>

<!-- Script -->
<div class="charity-cover-photo">
    <div class="home-text-container">
        <h1 id="slide"></h1>
        <!-- Script-->
        <script type="text/javascript">
            elem = document.getElementById("slide");
            word_slide();

        </script>
        <!-- Script -->
        <p class="text">Our mission is Helping to Make a Difference, firstly by means of providing humanitarian aid and
            food assistance and secondly through the development and subsequent provision of sustainable projects such
            as Business support package, educational and training programmers in other to put a beautiful smile in the
            face of families forever</p>
        <a href="donations.php" class="donate-button">Donate</a>
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