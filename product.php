<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hoofdpagina.php">
    <link rel="stylesheet" href="java.js    ">
    <title>product</title>
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
</body>

<div class="container4">

    <div class="informatie" ><u>Productinformatie:</u><br><br>Een sleutel hanger van een kat/poes Gemaakt van stof, katoen en placeholder
        <br>placeholderplaceholderplaceholderplaceholderplaceholderplaceholderplaceholderplaceholder <br>
        placeholderplaceholderplaceholderplaceholderplaceholderplaceholderplaceholderplaceholderplaceholder
        <br> <br> <u>Productkwalificaties:</u> <br><br> Lengte: <br> Hoogte: <br> Gewicht: <br><br> <u>Levering & Prijs:</u> <br><br> Voor morgen 00:00 besteld, morgen in huis! ($2,00 verzendkosten) <br> Prijs: $2,99 exl verzendkosten. <br><br>  </div>


    <div class="producttitel"><b>Product titel </b> </div>
    <span><a href="koop.php"></a></span>

        <div class="card1">
            <img src="images/lucky_cat.png" alt="Denim Jeans" style="width:100%">
        </div>
<!--
    <div id="clothes">
        <img src="images/lucky_cat.png" id="clothing">
        <button onclick="change('veeg.png')">Click here</button>
        <button onclick="change2()"> Click here</button>
        <button onclick="change3()"> Click here</button>
    </div>
-->
    </div>

<br> <br> <br> <br><br> <br><br> <br>
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
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="171308@novacollege.nl">
        <input type="hidden" name="lc" value="US">
        <input type="hidden" name="item_name" value="Sleutelhanger kat">
        <input type="hidden" name="item_number" value="1">
        <input type="hidden" name="amount" value="2.99">
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="button_subtype" value="services">
        <input type="hidden" name="no_note" value="0">
        <input type="hidden" name="tax_rate" value="8.000">
        <input type="hidden" name="shipping" value="1.49">
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
</html>
<?php
