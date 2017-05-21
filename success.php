<?php
include 'config.php';
if(isset($_POST['placeorder'])){
$zinger = $_POST['zinger'];
$steak = $_POST['steak'];
$coffe = $_POST['cof'];
$shake = $_POST['shake'];

$sql = "INSERT INTO salestable (item_name, Quantity, Dates) VALUES('Zinger Burger','$zinger',date('2017-05-22') ),('Steak','$steak',date('2017-05-22')),('Coffe','$coffe',date('2017-05-22')),('Shake','$shake',date('2017-05-22'))";

if(mysqli_query($conn, $sql)){
    echo "<b> Order has been placed.</b>";
    header("Refresh: 2 ; URL=placeorder.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

}

?>