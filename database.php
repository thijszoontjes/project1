<?php

$naam = filter_input(INPUT_POST, 'naam');
$email = filter_input(INPUT_POST, 'email');
$postcode = filter_input(INPUT_POST, 'postcode');
$stad = filter_input(INPUT_POST, 'stad');
$kaarthouder = filter_input(INPUT_POST, 'kaarthouder');
$kaartnummer = filter_input(INPUT_POST, 'kaartnummer');
$vervaldatum= filter_input(INPUT_POST, 'vervaldatum');
$cvv = filter_input(INPUT_POST, 'cvv');
if (!empty($naam)) {
    if (!empty($email)) {

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "bootje";
// Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO test (naam, email , postcode , stad , kaarthouder , kaartnummer , vervaldatum , cvv)
values ('$naam','$email','$postcode ',' $stad ',' $kaarthouder ',' $kaartnummer ',' $vervaldatum','$cvv')";
            if ($conn->query($sql)) {
                echo "New record is inserted sucessfully";
            } else {
                echo "Error: " . $sql . "
" . $conn->error;
            }
            $conn->close();
        }
    } else {
        echo "Naam is niet ingevuld.";
        die();
    }
} else {
        echo "Niet alle gegevens zijn ingevuld.";
     
        die();
    }

