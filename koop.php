<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="hoofdpagina.php">
    <title>kooppagina</title>
</head>
<style>
    body {
        background-color: rgba(255,204,204, 0.4);
    }
</style>
<body>
<div class="nav-bar">
    <div class="site-logo">
        <img src="images/logo" width="250px" height=125px" alt="logo">
    </div>
    <div class="middle" style="float: left">
        <a href="hoofdpagina.php" class="btn btn1"><b>Homepagina</b></a>
        <a href="hoofdpagina.php#webshop" class="btn btn2"><b>Webshop</b></a>
        <a href="hoofdpagina.php#over" class="btn btn3"><b>Over ons</b></a>
    </div>
</div>
<div class="overzicht"><h1>Overzicht Product <br> Betalen via krediet kaart</h1>
<div class="row1" id="database">
            <label for="fname"><i class="fa fa-user"></i>Volledige Naam:</label>
            <input type="text" id="fname" name="firstname" placeholder="Sjonnie Welling">
            <label for="email"><i class="fa fa-envelope"></i> Email:</label>
            <input type="text" id="email" name="email" placeholder="sjonnie@voorbeeld.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Postcode + Huisnummer:</label>
            <input type="text" id="adr" name="address" placeholder="1234AB , 69 ">
            <label for="city"><i class="fa fa-institution"></i> Stad:</label>
            <input type="text" id="city" name="city" placeholder="Heemskerk ">

    <div class="row2" id="database">
        <label for="fname"><i class="fa fa-user"></i>Kaarthouder Naam:</label>
        <input type="text" id="fname" name="firstname" placeholder="Sjonnie Welling">
        <label for="email"><i class="fa fa-envelope"></i> Krediet kaart nummer:  </label>
        <input type="text" id="email" name="email" placeholder="1111-22222-3333-4444">
        <label for="adr"><i class="fa fa-address-card-o"></i>Verval datum kaart:</label>
        <input type="text" id="adr" name="address" placeholder="September 2021 ">
        <label for="city"><i class="fa fa-institution"></i> CVV:</label>
        <input type="text" id="city" name="city" placeholder="123 ">

    </div>
</div>
</div>

<span><a href="#"></a></span>
<br> <br> <br> <br><br> <br><br>><br> <br> <br> <br><br> <br><br> <br> <br> <br> <br> <br><br> <br><br> <br>
<div class="footer-dark">

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="hoofdpagina.php#webshop">Webshop</a></li>
                        <li><a href="hoofdpagina.php#ons">Over ons</a></li>
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
if(isset($_POST['submit']))
{
    $username="root";
    $password="";
    $server="127.0.0.1";
    $database="bootje";

    $con = mysql_connect($server,$username,$password);

    $sql="INSERT INTO customer (FirstName, Surname, EmailAddress)
VALUES
('$_POST[firstname]','$_POST[surname]','$_POST[email]')";
    $a=mysql_query($sql);

    if (!$a)
    {
        echo mysql_error();
    }
    else
    {
        echo "1 record added";
    }
    mysql_close($con);
}
