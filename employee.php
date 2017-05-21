<!DOCTYPE html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
  <style type="text/css">
    
  </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Dashboard</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/sale/dashboard.php">Dashboard</a></li>
      <li  class="active"><a href="employee.php">Manage Employees </a></li>
      <li><a href = "salereport.php">Sales Report </a></li>
      <li><a href = "users.php">Users </a></li>
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
if(isset($_SESSION['username'])){
  ?>
<div class="jumbotron">
<h1 class="text-center">
<?php
echo "Hello     ";
echo $login_session;
?>
</h1>
</div>
<?php
}


/* <button type="button" id="empbtn">Add Employee</button>

*/

///Deleting data//////////////////

if(isset($_GET['id']) && $_GET['id'] != ""){
     $sqldel = 'DELETE from employees where Emp_id = '.$_GET['id'].'';
if(mysqli_query($conn, $sqldel)){
    echo "<b> Data has been Deleted.</b>";
    header("Refresh: 2;URL=employee.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

//Selecting data //////
$field = 'Fname';
$sort = 'ASC';
if(isset($_GET['sorts']) ){
  if($_GET['sorts']=='ASC'){
    $sort = 'DESC';
  }
  else {
    $sort = 'ASC';
  }
}

if(isset($_GET['col']) && $_GET['col']=='Fname'){
  $field = 'Fname';
}
elseif (isset($_GET['col']) && $_GET['col'] == 'Lname') {
   $field = 'Lname';
}
elseif (isset($_GET['col'] ) && $_GET['col']== 'Emp_id') {
  $field = 'Emp_id';
}
 $sql1 = "SELECT  * From employees ORDER BY $field $sort";

$result = $conn->query($sql1) or die ("Error in query: $sql1. ".mysqli_error($conn)); 

 /////showing results in tablre form///
if ($result->num_rows > 0) { 
    // yes 
    // print them one after another 
    echo '<table class="table table-bordered" id="table" border="2"  style= " width:60%; background-color: #16E0BB; color: #000; margin: 0 auto;"> '; 
    echo '<h3 class="text-center" style="color:#16E0BB;"> <b> Employee Information </b> </h3>';
    echo '<thead>';
            echo '<tr>'; 

                echo '<th><a href="employee.php?sorts='.$sort.'&col=Emp_id">Emplyee ID</a></th>';
                echo'<th><a href="employee.php?sorts='.$sort.'&col=Fname"> First_name</a></th>';
                echo '<th><a href="employee.php?sorts='.$sort.'&col=Lname"> Last_name </a></th>';
                echo'<th> Email</th>';
               echo  '<th> Phone</th>';
                echo '<th> Address</th>';
                echo '<th> City</th>';
                echo '<th> State</th>';
                echo '<th> Description</th>';
                echo '<th colspan = "2"> Operations</th>';
                
               


          echo  '</tr>';
        
    echo '</thead>';
    while($row = $result->fetch_assoc()) { 
    
              echo"<td>".$row['Emp_id']."</td>";
              echo"<td>" .$row['Fname']."</td>";
              echo"<td>" .$row['Lname'] ."</td>";
              echo "<td>" .$row['Email']. "</td>";
              echo"<td>" .$row['Ph_no']. "</td>";
              echo"<td>" .$row['Address']. "</td>";
              echo"<td>" .$row['City']. "</td>"; 
              echo"<td>" .$row['State']. "</td>"; 
              echo"<td>" .$row['Description']. "</td>"; 

              echo "<td> <button class='btn-default btn' name='delete'><span class='glyphicon glyphicon-remove-circle'></span> <a href='employee.php?id=".$row['Emp_id']."'>Delete Data</a></button><td> <button class='btn-default btn' name='Edit'><span class='glyphicon glyphicon-pencil'></span> <a href='editemp.php?ud=".$row['Emp_id']."'>Edit Data</a></button> </td> </td>";
              
              echo "<td><input type='checkbox' name='check[".$row['Emp_id']."]' id='check[]' value=".$row['Emp_id']."  ></td>"; 
         

        echo "</tr>"; 
    } 
    echo "</table>"; 
} 
else { 
    // no 
    // print status message 
    echo "No rows found!"; 
} 
echo "<button class='' type='button' id='newentry' style='float:right;padding:5px;margin-top:10px;margin-right:25px;'><a href='addemp.php'>Add New Employee</a></button>";

echo "<button id='deleteentry' name='del' style='float:right; margin-bottom:60px; padding:5px;margin-top:10px;margin-right:25px;'><a href='employee.php' style='text-decoration:none;'>Delete Checked</a></button>";

?>