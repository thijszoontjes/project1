<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Bootjes Cadeatjes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<style>
    body {
        background-color: rgba(255, 204, 204, 0.4);
        background-image: url("#");
        background-blend-mode: multiply;
        background-size: cover;
    }
</style>
<div class="bk"></div>
<div class="nav-bar">
    <a href="index.php">
        <div class="site-logo">
            <img src="images/logo" width="250px" height=125px" alt="logo" id="logo">
    </a>
    <div class="middle" style="float: left">
        <a href="" class="btn btn1"><b>Homepagina</b></a>
        <a href="#row" class="btn btn2"><b>Webshop</b></a>
        <a href="#overons" class="btn btn3"><b>Over ons</b></a>
    </div>
</div>
</div>


<div  class="welkom"><h1> Welkom op onze webshop!<br> Bootje Cadeautje</h1></div>

<img id="luckycat" src="images/lucky_cat.png" alt="png">

<div class="ondertext"><h3> Een webshop voor al uw spullen! Van sleutelhangers tot prachtige naaiwerkjes.<br> Een webshop voor al uw spullen! Van sleutelhangers tot prachtige naaiwerkjes. <br>Een webshop voor al uw spullen! Van sleutelhangers tot prachtige naaiwerkjes.<br> Een webshop voor al uw spullen! Van sleutelhangers tot prachtige naaiwerkjes.</h3></div>

<div id="webshop" class="webshop"><h1><u>Webshop</u></h1></div>
<div class="row" id="row">
    <?php
    $con = mysqli_connect("localhost", "root", "", "product"); // Check connection

    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($con, "SELECT * FROM product");
    while ($row = mysqli_fetch_array($result)) {

    echo "<div class='card col-12 col-sm-6 col-lg-4'>";
//        echo "<im    . $row['image'] . alt='Denim Jeans' style='width:100%'>";
//        echo "<img scr='$image'" . $row['image'];
        echo "<img src='images/". $row['image'] ."'<img class='grootte' width='100%' height='200%'>";
        echo "<h1>" . $row['titel'] . "</h1>";
        echo "<p class='price'>" . $row['prijs'] . "</p>";
        echo "<p>" . $row['beschrijving'] . "</p>";
        echo "<p>";
            echo "<button><a href='product.php' style='color: yellow'>Zie product specificaties</a></button>";
            echo "</p>";
        echo "</div>";
    }
    mysqli_close($con);
    ?>
</div>
<br> <br> <br> <br> <br>

<div class="container" id="overons">
    <div id="textons" style="text-align:center">
        <h2>Over Ons</h2>
        <p>Wij helpen je graag verder, hier wat info over wie wij zijn: <br>
            PlaceholdePlaceholderPlaceholderPlaceholderPlaceholder<br>PlaceholderPlaceholderPlaceholderPlaceho<br>lderPlaceholderPlaceholderPlaceholder<br>PlaceholderPlaceholderr
        </p><br> PlaceholdePlaceholderPlaceholderPlaceholderPlaceholder<br>PlaceholderPlaceholderPlaceholderPlaceho<br>lderPlaceholderPlaceholderPlaceholder<br>PlaceholderPlaceholderr
    </div>
    <div class="row8">
        <div class="column">
            <img id="onscat"
                 src="https://wwf.be/sites/default/files/styles/full_1920x980/public/inline-images/mALbiBS4dU1dvmGr6vOejaKvdVvrQEnrAhUYSW97yhN8KnI36V.jpg?itok=daXsja6F"
                 style="width:100%">
        </div>
    </div>
</div>
<br> <br><br><br><br><br><br><br><br>
<div class="footer-dark">
    <footer>
        <div class="container9">
            <div class="row">
                <div style="text-align: center">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="index.php#webshop">Webshop</a></li>
                        <li><a href="index.php#overons">Over ons</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <p class="copyright">Bootje Cadeautje 2021@</p>
            </div>

        </div>
    </footer>
</body>
</html>
<?php
