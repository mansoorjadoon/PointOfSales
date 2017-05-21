<!DOCTYPE html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
  <style type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Customer Dashboard</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="">Place Order</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li  class="btn btn-danger" ><a style="color: white;" href="logout.php"><span class=" glyphicon glyphicon-user"></span> Logout</a></li>
    </ul>
  </div>
</nav>

</body>
<?php
include 'config.php';

include 'session.php';

  

$sql1 = "SELECT*From menu ";

$result = $conn->query($sql1) or die ("Error in query: $sql1. ".mysqli_error($conn)); 

 /////showing results in tablre form///
if ($result->num_rows > 0) { 
  ?>
<div class="container">


  <?php
    // yes 
    // print them one after another 
    echo '<table class="table table-bordered" id="table" border="2" style= "width:60%;  background-color: #84ed86; color: #761a9b; margin: 0 auto;"> '; 
    echo '<h3 class="text-center"> <b> Menu Item </b> </h3>';
    echo '<thead>';
            echo '<tr>'; 

                echo '<th>Item ID</th>';
                echo'<th> Item Name</th>';
               echo  '<th> Price</th>';
               
                
                
                
               


          echo  '</tr>';
        
    echo '</thead>';
    while($row = $result->fetch_assoc()) { 
    
              echo"<td>".$row['Item_id']."</td>";
              echo"<td>" .$row['Item_name']."</td>";
              echo"<td>" .$row['Price'] ."</td>";
             
              
        

        echo "</tr>"; 
    } 
    echo "</table>"; 

} 
else { 
    // no 
    // print status message 
    echo "No rows found!"; 
} 
?>
</div>


<div class="container" style="text-align: center;">
  <!-- Trigger the modal with a button -->
  <button style="margin-top: 10px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick="showing()">Place Order</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Place Order</h4>
        </div>
        <div class="modal-body">
         <form class="form-group " id="place" name="place" action="success.php" method="POST" style="width: 60%; margin-left:20%;">
  <label for="zinger">Zinger Burger</label>
  <input class="form-control" type="number" name="zinger" step="1">
  <label for="steak">Steak</label>
  <input class="form-control" type="number" name="steak" step="1">
  <label for="cof">Coffee</label>
  <input class="form-control" type="number" name="cof" step="1">
  <label for="shake">Shake</label>
  <input class="form-control" type="number" name="shake" step="1">

  <input class="btn btn-success" style="margin-top: 10px;" type="submit" id="placeorder" name="placeorder" value="Place Order" >

</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>




<div style="text-align: center; margin-top: 10px;"> 

</div>  



<script type="text/javascript">
	
</script>
</html>