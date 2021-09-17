<?php

   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">

   <head>
      <title>login</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
       <link href = "login.css" rel = "stylesheet">
<!--       <link rel="stylesheet" href="product.js ">-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
             integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
         }

         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }

         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }

         .form-signin .checkbox {
            font-weight: normal;
         }

         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }

         .form-signin .form-control:focus {
            z-index: 2;
         }

         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }

         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }

         h2{
            text-align: center;
            color: #017572;
         }
      </style>

   </head>

   <body>

      <h2>Voer gebruikersnaam en wachtwoord in:</h2>
      <div class = "container form-signin">

         <?php
            $msg = '';

            if (isset($_POST['login']) && !empty($_POST['username'])
               && !empty($_POST['password'])) {

               if ($_POST['username'] == 'bo' &&
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';

                  echo 'Inloggen gelukt!';
        echo "
       <form action=\"productdatabase.php\" method=\"post\">
    <p>
        <label for=\"titel\">Product Toevoegen <br>Titel Product:</label> <br>
        <input type=\"text\" name=\"titel\" id=\"titel\">
    </p>
    <p>
        <label for=\"prijs\">Prijs Product:</label> <br>
        <input type=\"text\" name=\"prijs\" id=\"prijs\">
    </p>
    <p>
        <label for=\"beschrijving\">Beschrijving product:</label>
        <input type=\"text\" name=\"beschrijving\" id=\"beschrijving\">
    </p>
    <label for=\"image\">Select a file:</label>
<input type=\"file\" id=\"image\" name=\"image\">
    
    <input type=\"submit\" value=\"Submit\">
</form>
<br>
<br>
";

        echo "<form action=\"delete.php\" method=\"post\" name='verwijderen'>
    <p>
        <label for=\"titel\">Verwijder Product Nummer:</label> <br>
        <input type=\"text\" name=\"titel\" id=\"titel\">
    </p>

    <input type=\"submit\" value=\"Submit\" name='verwijderen'>
</form>";
                 
               }else {
                  $msg = 'Wachtwoord of gebruikersnaam is fout.';
               }
            }
         ?>
      </div> <!-- /container -->

      <div class = "container">

         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control"
               name = "username" placeholder = "Gebruikersnaam"
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Wachtwoord" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
         </form>


      </div>

   </body>
</html>