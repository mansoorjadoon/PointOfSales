<?php
include 'config.php';
include 'session.php';
if(isset($_SESSION['username'])){
echo "Hello     ";
echo $login_session;

}
if(isset($_POST['submit']) && !empty($_POST['submit'])){
    //Form Data stored in variables//
    $pcode= $_POST['pcode'];
    $gname=$_POST['gname'];
    $pname = $_POST['pname'];
    $cost = $_POST['cost'];
    $price = $_POST['price'];
    $supp = $_POST['supp'];
    $qty = $_POST['qty'];
    $exp = $_POST['exp'];
    $sql="INSERT into products (product_code,gen_name,product_name,cost,price,supplier,qty,expiry_date) VALUES ('$pcode','$gname','$pname','$cost','$price','$supp','$qty','$exp' )";
//echo $rslt=  $conn->query($sql);

if(mysqli_query($conn, $sql)){
    echo "<b> Data has been Inserted.</b>";
    header("Refresh: 2 ; URL=inventory.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


}
