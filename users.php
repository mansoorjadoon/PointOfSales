<!DOCTYPE html>
<head>
<title>Sales Report</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    <style type="text/css">
        
    </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Admin Dashboard</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="http://localhost/sale/dashboard.php">Dashboard</a></li>
      <li><a href="employee.php">Manage Employees </a></li>
      <li><a href = "salereport.php">Sales Report </a></li>
      <li class="active"><a href = "users.php">Users </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li  class="btn btn-danger" ><a style="color: white;" href="logout.php"><span class=" glyphicon glyphicon-user"></span> Logout</a></li>
    </ul>
  </div>
</nav>



</head>






<?php
include 'config.php';
include 'session.php';


$sql1 = "SELECT  * From user ";

$result = $conn->query($sql1) or die ("Error in query: $sql1. ".mysqli_error($conn)); 

 /////showing results in tablre form///
if ($result->num_rows > 0) { 
    // yes 
    // print them one after another 
    echo '<div class="container" style="width:70%;"> ';
    echo '<table class="table table-bordered" id="table" border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;"> '; 
    echo '<h3 class="text-center"> <b> Users </b> </h3>';
    echo '<thead>';
            echo '<tr>'; 

                echo '<th>User Id</th>';
                echo'<th>Username</th>';
                echo '<th>Password</th>';
                echo'<th> Name</th>';
               echo  '<th> Position</th>';
          echo  '</tr>';
        
    echo '</thead>';
    while($row = $result->fetch_assoc()) { 
    
              echo"<td>".$row['id']."</td>";
              echo"<td>" .$row['username']."</td>";
              echo"<td>" .$row['password'] ."</td>";
              echo "<td>" .$row['name']. "</td>";
              echo"<td>" .$row['position']. "</td>";
            

        echo "</tr>"; 
    } 
    echo "</table>"; 
    echo "</div>";
} 
else { 
    // no 
    // print status message 
    echo "No rows found!"; 
} 
?>

