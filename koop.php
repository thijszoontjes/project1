<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="index.php">
    <!--<link rel="stylesheet" href="database.php">-->

    <script src="jquery/jquery-3.3.1.min.js"></script> <!--Importeert jQuery-->
    <script src="java.js"></script>
    <title>kooppagina</title>
</head>
<style>
    body {
        background-color: rgba(255, 204, 204, 0.4);
    }
</style>
<body>
<div class="nav-bar">
    <div class="site-logo">
        <img src="images/logo" width="250px" height=125px" alt="logo">
    </div>
    <div class="middle" style="float: left">
        <a href="index.php" class="btn btn1"><b>Homepagina</b></a>
        <a href="index.php#webshop" class="btn btn2"><b>Webshop</b></a>
        <a href="index.php#over" class="btn btn3"><b>Over ons</b></a>
    </div>
</div>

<div class="overzicht"><h1>Overzicht Product <br> Betalen via krediet kaart</h1>
    <table id="formTable">
        <tr>
            <td><label for="fName"><i class="fa fa-user"></i>Volledige Naam:</label></td>
            <td><label for="fCardHolder"><i class="fa fa-user"></i>Kaarthouder Naam:</label></td>
        </tr>

        <tr>
            <td><input type="text" class="betaalvlak" id="fName" name="naam" placeholder="Sjonnie Welling"></td>
            <td><input type="text" class="betaalvlak" id="fCardHolder" name="kaarthouder"
                       placeholder="Sjonnie Welling"></td>
        </tr>

        <tr>
            <td><label for="fEmail"><i class="fa fa-envelope"></i> Email:</label></td>
            <td><label for="fCardNumber"><i class="fa fa-envelope"></i> Credit Card nummer: </label></td>
        </tr>

        <tr>
            <td><input type="text" class="betaalvlak" id="fEmail" name="email"
                       placeholder="sjonnie@voorbeeld.com"></td>
            <td><input type="text" class="betaalvlak" id="fCardNumber" name="kaartnummer"
                       placeholder="1111-22222-3333-4444"></td>
        </tr>

        <tr>
            <td><label for="fAddress"><i class="fa fa-address-card-o"></i> Straat + Huisnummer:</label></td>
            <td><label for="fExpiration"><i class="fa fa-address-card-o"></i>Verval datum kaart:</label></td>
        </tr>

        <tr>
            <td><input type="text" class="betaalvlak" id="fAddress" name="postcode"
                       placeholder="Ligthartstraat , 69 "></td>
            <td><input type="text" class="betaalvlak" id="fExpiration" name="vervaldatum" placeholder="September 2021 ">
            </td>
        </tr>

        <tr>
            <td><label for="fCity"><i class="fa fa-institution"></i> Stad + Postcode:</label></td>
            <td><label for="fCVV"><i class="fa fa-institution"></i> CVV:</label></td>
        </tr>

        <tr>
            <td><input type="text" class="betaalvlak" id="fCity" name="stad" placeholder="Heemskerk , 1234AB "></td>
            <td><input type="text" class="betaalvlak" id="fCVV" name="cvv" placeholder="123 "></td>
        </tr>
        <tr>
            <td colspan="2"><input class="bestelbtn" id="bestel" type="submit" value="Bestel"></td>
        </tr>

    </table>

    <div id="bestelStatus"></div>
</div>

<div id="anders"><h3> Liever via Paypal betalen? <br> Klik hier onder op de knop om via Paypal te betalen!  </h3></div>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="paypal">
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
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"  border="0" id="paypalImg"
           name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="index.php#webshop">Webshop</a></li>
                        <li><a href="index.php#ons">Over ons</a></li>
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



