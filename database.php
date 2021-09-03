<?php

//Paypal fields
//Benodigde velden: alles
function checkPaypalFields($inputArray){
    $name = $inputArray["name"];
    $email = $inputArray["email"];
    $address = $inputArray["address"];
    $city = $inputArray["city"];

    if(!empty($name) && !empty($email) && !empty($address) && !empty($city)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "bootje";

        //Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
        else {
            $sql = "INSERT INTO test (naam, email , postcode , stad )
                    values ('$name','$email','$address ','$city')";
            if ($conn->query($sql)) {
                echo "RECORD INSERTED";
            } else {
                echo "Error: " . $sql . " " . $conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo "MISSING DATA";
    }
}


//Bestel-knop fields
//Benodigde velden: name, email, straat + huisnummer, stad + postcode
function checkAllFields($inputArray){
    $name = $inputArray["name"];
    $cardHolder = $inputArray["cardHolder"];
    $email = $inputArray["email"];
    $cardNumber = $inputArray["cardNumber"];
    $address = $inputArray["address"];
    $expiration = $inputArray["expiration"];
    $city = $inputArray["city"];
    $cvv = $inputArray["cvv"];

    if (!empty($name) && !empty($cardHolder) && !empty($email) && !empty($cardNumber) && !empty($address) && !empty($expiration) && !empty($city) && !empty($cvv)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "bootje";

        //Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
        else {
            $sql = "INSERT INTO test (naam, email , postcode , stad , kaarthouder , kaartnummer , vervaldatum , cvv)
                    values ('$name','$email','$address ',' $city ',' $cardHolder ',' $cardNumber ',' $expiration','$cvv')";
            if ($conn->query($sql)) {
                echo "RECORD INSERTED";
            } else {
                echo "Error: " . $sql . " " . $conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo "MISSING DATA";
    }
}


function debug($var){
    print_r($var);
}


//Kijkt of alle data/gegevens vanuit de call uit java.js zijn meegegeven
if(isset($_POST["usingPayPal"]) && isset($_POST["inputArray"])){
    $usingPayPal = filter_var($_POST["usingPayPal"], FILTER_VALIDATE_BOOLEAN);
    $inputArray = $_POST["inputArray"];
    //debug($inputArray);

    if($usingPayPal){
        checkPaypalFields($inputArray);
    }
    else{
        checkAllFields($inputArray);
    }
}


//$naam = filter_input(INPUT_POST, 'naam');
//$email = filter_input(INPUT_POST, 'email');
//$postcode = filter_input(INPUT_POST, 'postcode');
//$stad = filter_input(INPUT_POST, 'stad');
//$kaarthouder = filter_input(INPUT_POST, 'kaarthouder');
//$kaartnummer = filter_input(INPUT_POST, 'kaartnummer');
//$vervaldatum= filter_input(INPUT_POST, 'vervaldatum');
//$cvv = filter_input(INPUT_POST, 'cvv');
//
//if (!empty($naam) && !empty($postcode)&& !empty($stad)&& !empty($kaarthouder)&& !empty($kaartnummer)&& !empty($vervaldatum)&& !empty($cvv)) {
//    echo "";
//    if (!empty($email)) {
//          $host = "localhost";
//            $dbusername = "root";
//            $dbpassword = "";
//            $dbname = "bootje";
//// Create connection
//            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
//            if (mysqli_connect_error()) {
//                die('Connect Error (' . mysqli_connect_errno() . ') '
//                    . mysqli_connect_error());
//            } else {
//                $sql = "INSERT INTO test (naam, email , postcode , stad , kaarthouder , kaartnummer , vervaldatum , cvv)
//values ('$naam','$email','$postcode ',' $stad ',' $kaarthouder ',' $kaartnummer ',' $vervaldatum','$cvv')";
//                if ($conn->query($sql)) {
//                    echo "New record is inserted sucessfully";
//                } else {
//                    echo "Error: " . $sql . "
//" . $conn->error;
//                }
//                $conn->close();
//            }
//        } else {
//            echo "Naam is niet ingevuld.";
//            die();
//        }
//
//    } else {
//        echo "Niet alle gegevens zijn ingevuld.";
//
//        die();
//
//}

