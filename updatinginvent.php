<?php 
include 'config.php';
include 'session.php';
if(isset($_SESSION['username'])){
echo "Hello 	";
echo $login_session;

}
//////Editing the data///////
if(isset($_POST['id'])){
	$udID = $_POST['id'];
	$pcode= $_POST['pcode'];
    $gname=$_POST['gname'];
    $pname = $_POST['pname'];
    $cost = $_POST['cost'];
    $price = $_POST['price'];
    $supp = $_POST['supp'];
    $qty = $_POST['qty'];
    $exp = $_POST['exp'];
	$query= "UPDATE products set product_code = '$pcode', gen_name = '$gname', product_name = '$pname', cost = '$cost', price = '$price', supplier = '$supp', qty = '$qty', expiry_date = '$exp' Where product_id =  ".$udID." " ;

if(mysqli_query($conn, $query)){
    echo "<b> Data has been Updated.</b>";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
echo '<script type="text/javascript"> window.location = "inventory.php" </script>';
}

?>