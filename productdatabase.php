
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
