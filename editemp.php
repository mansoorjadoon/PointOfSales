<!DOCTYPE html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <style type="text/css"></style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Dashboard</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/sale/dashboard.php">Dashboard</a></li>
      <li><a href="employee.php">Manage Employees </a></li>
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

if(isset($_GET['ud']) && $_GET['ud'] != ""){

  $id = $_GET['ud'];
   $id;
  $sql = "SELECT * from employees where Emp_id = ".$id." ";
 $res = $conn->query($sql);
$rw = $res->fetch_assoc();
//print_r ($rw);
//echo $sch = $rw['School']; 
}




?>
<!--Redirecyed Form -->

<div class="container">
<div class="col-md-4"></div>

<div class="col-md-4">
<form class="form-group" id="addemp" name="addemp" method="POST" action="updatingEmp.php" >
    <fieldset>

        <H3>Employee Info.</H3>
          
						<input type="hidden" name="id" value= "<?php echo $_GET['ud'];?>">
				

                    <label for="fname">First Name </label>
                    <input class="form-control" type="text" name="fname" value="<?php echo $rw['Fname'];?>"> <br>
                
                    <label for="lname">Last Name</label>
                    <input class="form-control" type="text" name="lname" value="<?php echo $rw['Lname'];?>">
                
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" value="<?php echo $rw['Email'];?>">
               
                    <label for="phone">Contact No. </label>
                    <input class="form-control" type="text" name="phone" value="<?php echo $rw['Ph_no'];?>">
                
                    <label for="add">Address</label>
                    <input class="form-control" type="text" name="add" value="<?php echo $rw['Address'];?>">
                
                     <label for="city">City </label>
                    <input class="form-control" type="text" name="city" value="<?php echo $rw['City'];?>">
                
                     <label for="state">State</label>
                    <input class="form-control" type="text" name="state" value="<?php echo $rw['State'];?>">
                
                    <label for="Des">Description</label>
                    <input class="form-control" type="text" name="Des" value="<?php echo $rw['Description'];?>">
                
                    <input class="btn btn-primary" type="submit" name="update" value="update">
               
            

    </fieldset>
</form> 
</div>
<div class="col-md-4"></div>
</div>