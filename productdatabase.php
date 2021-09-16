<?php
//
//
////Paypal fields
////Benodigde velden: alles
//function checkPaypalFields($inputArray)
//{
//    $titel = $inputArray["titel"];
//    $prijs = $inputArray["prijs"];
//    $beschrijving = $inputArray["beschrijving"];
//
//    if (!empty($titel) && !empty($prijs) && !empty($beschrijving)) {
//        $host = "localhost";
//        $dbusername = "root";
//        $dbpassword = "";
//        $dbname = "product";
//
//        //Create connection
//        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
//
//        if (mysqli_connect_error()) {
//            die('Connect Error (' . mysqli_connect_errno() . ') '
//                . mysqli_connect_error());
//        } else {
//            $sql = "INSERT INTO product (titel, prijs , beschrijving)
//                    values ('$titel','$prijs','$beschrijving')";
//            if ($conn->query($sql)) {
//                echo "RECORD INSERTED";
//            } else {
//                echo "Error: " . $sql . " " . $conn->error;
//            }
//            $conn->close();
//        }
//    } else {
//        echo "MISSING DATA";
//    }
//}
//
//$titel = filter_input(INPUT_GET, 'titel');
//$prijs = filter_input(INPUT_GET, 'prijs');
//$beschrijving = filter_input(INPUT_GET, 'beschrijving');
//$host = "localhost";
//$dbusername = "root";
//$dbpassword = "";
//$dbname = "product";
//// Create connection
//$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
//if (mysqli_connect_error()){
//die('Connect Error ('. mysqli_connect_errno() .') '
//. mysqli_connect_error());
//}
//else{
//$sql = "INSERT INTO product (titel, prijs, beschrijving)
//values ('$titel','$prijs' , '$beschrijving')";
//if ($conn->query($sql)){
//echo "New record is inserted sucessfully";
//}
//else{
//echo "Error: ". $sql ."
//". $conn->error;
//}
//$conn->close();
//}
//
//?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "product");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$titel = mysqli_real_escape_string($link, $_REQUEST['titel']);
$prijs = mysqli_real_escape_string($link, $_REQUEST['prijs']);
$beschrijving = mysqli_real_escape_string($link, $_REQUEST['beschrijving']);

// Attempt insert query execution
$sql = "INSERT INTO product (titel, prijs, beschrijving) VALUES ('$titel', '$prijs' , '$beschrijving')";
if(mysqli_query($link, $sql)){
    echo "Product toegevoegd.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
