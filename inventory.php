<head>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<?php
include 'config.php';

include 'session.php';


/* <button type="button" id="empbtn">Add Employee</button>


*/

///Deleting data//////////////////

if(isset($_GET['id']) && $_GET['id'] != ""){
     $sqldel = 'DELETE from products where product_id = '.$_GET['id'].'';
if(mysqli_query($conn, $sqldel)){
    echo "<b> Data has been Deleted.</b>";
    header("Refresh: 2;URL=inventory.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

//Selecting data //////
$field = 'cost';
$sort = 'ASC';
if(isset($_GET['sorts']) ){
  if($_GET['sorts']=='ASC'){
    $sort = 'DESC';
  }
  else {
    $sort = 'ASC';
  }
}

if(isset($_GET['col']) && $_GET['col']=='cost'){
  $field = 'cost';
}
elseif (isset($_GET['col']) && $_GET['col'] == 'price') {
   $field = 'price';
}
elseif (isset($_GET['col'] ) && $_GET['col']== 'product_id') {
  $field = 'product_id';
}
 $sql1 = "SELECT  * From products ORDER BY $field $sort";

$result = $conn->query($sql1) or die ("Error in query: $sql1. ".mysqli_error($conn)); 

 /////showing results in tablre form///
if ($result->num_rows > 0) { 
    // yes 
    // print them one after another
    echo '<div class="container">';
    
    echo '<table class="table table-bordered" id="table" border="2" style= " width:80%; background-color: #84ed86; color: #761a9b; margin: 0 auto;"> '; 
    echo '<H3 class="text-center"> <b> Product Information </b> </H3>';
    
    echo '<thead>';
            echo '<tr>'; 

                echo '<th><a href="inventory.php?sorts='.$sort.'&col=product_id">Product ID</a></th>';
                echo'<th> Product Code</th>';
               echo  '<th> Gen_Name</th>';
                echo '<th> Product Name</th>';
                echo'<th><a href="inventory.php?sorts='.$sort.'&col=cost"> Cost Price</a></th>';
                echo '<th><a href="inventory.php?sorts='.$sort.'&col=price"> Price </a></th>';
                echo '<th> Supplier</th>';
                echo '<th> Quantity</th>';
                echo '<th> Expiry Data</th>';
                echo"<th colspan='2'> Operations </th>";
                
               


          echo  '</tr>';
        
    echo '</thead>';
    while($row = $result->fetch_assoc()) { 
    
              echo"<td>".$row['product_id']."</td>";
              echo"<td>" .$row['product_code']."</td>";
              echo"<td>" .$row['gen_name'] ."</td>";
              echo "<td>" .$row['product_name']. "</td>";
              echo"<td>" .$row['cost']. "</td>";
              echo"<td>" .$row['price']. "</td>"; 
              echo"<td>" .$row['supplier']. "</td>"; 
              echo"<td>" .$row['qty']. "</td>"; 
              echo"<td>" .$row['expiry_date']. "</td>"; 
               

              echo "<td> <button class='btn btn-default' name='delete'><a  href='inventory.php?id=".$row['product_id']."'>Delete Data</a></button><td> <button class='btn btn-default' name='Edit'><a href='editinventory.php?ud=".$row['product_id']."'>Edit Data</a></button> </td> </td>";
              
              echo "<td><input  type='checkbox' name='check[".$row['product_id']."]' id='check[]' value=".$row['product_id']."  ></td>"; 
         

        echo "</tr>"; 
    } 
    echo "</table>"; 
} 
else { 
    // no 
    // print status message 
    echo "No rows found!"; 
} 
echo "<button class='btn btn-default' type='button' id='newentry' style='float:right;padding:5px;margin-top:10px;margin-right:25px;'><a href='addinventory.php'>Add New Product</a></button>";

echo "<button class='btn btn-default' id='deleteentry' name='del' style='float:right;padding:5px;margin-top:10px;margin-right:25px;'><a href='inventory.php' style='text-decoration:none;'>Delete Checked</a></button>";
echo "<button class='btn btn-default' id='deleteentry' name='del' style='float:right;padding:5px;margin-top:10px;margin-right:25px;'><a href='emp_dash.php' style='text-decoration:none;'>Back</a></button>";
echo "</div>";

?>

