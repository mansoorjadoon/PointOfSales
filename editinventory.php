<?php
include 'config.php';
include 'session.php';
if(isset($_SESSION['username'])){
echo "Hello 	";
echo $login_session;

}
if(isset($_GET['ud']) && $_GET['ud'] != ""){

  $id = $_GET['ud'];
   $id;
  $sql = "SELECT * from products where product_id = ".$id." ";
 $res = $conn->query($sql);
$rw = $res->fetch_assoc();
//print_r ($rw);
//echo $sch = $rw['School']; 
}




?>
<!--Redirecyed Form -->
<form id="addinvent" name="addinvent" method="POST" action="updatinginvent.php" >
    <fieldset>

        <legend>Product Info.</legend>
            <ul>
            	<li><br>
						<input type="hidden" name="id" value="<?php echo $_GET['ud'];?>">
					</li><br>
                <li>

                    <label for="pcode">Product Code</label>
                    <input type="text" name="pcode" value="<?php echo $rw['product_code'];?>">
                </li><br>
                <li>
                    <label for="gname">Gen_Name</label>
                    <input type="text" name="gname" value ="<?php echo $rw['gen_name'];?>">
                </li><br>
                <li>
                    <label for="pname">Product Name</label>
                    <input type="text" name="pname" value="<?php echo $rw['product_name'];?>">
                </li><br>
                <li>
                    <label for="cost">Cost Price </label>
                    <input type="text" name="cost" value="<?php echo $rw['cost'];?>" >
                </li><br>
                <li>
                    <label for="price">Price</label>
                    <input type="text" name="price" value="<?php echo $rw['price'];?>">
                </li><br>
                <li>
                     <label for="supp">Supplier</label>
                    <input type="text" name="supp" value="<?php echo $rw['supplier'];?>">
                </li><br>
                <li>
                     <label for="qty">Quantity</label>
                    <input type="text" name="qty" value="<?php echo $rw['qty'];?>">
                </li><br>
                <li>
                    <label for="exp">Expiry Date</label>
                    <input type="date" name="exp" value="<?php echo $rw['expiry_date'];?>">
                </li><br>
                <li>
                    <input type="submit" name="update" value="update">
                </li><br>
            </ul>

    </fieldset>
</form> 