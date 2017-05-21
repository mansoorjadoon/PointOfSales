<?php
include 'config.php';
include 'session.php';
if(isset($_SESSION['username'])){


}
?>

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

<div class="container">
	<div class="jumbotron text-center">
  <h3>  <?php echo "Hello 	";
echo $login_session; ?></h3>
  <p>You can manage the cafe inventory and sales and users here.</p>
  </div>

<div class="row">
	<div class="col-md-4" style="height: 200px; background-color: #16E0BB">
			<div style="margin-top: 20%; margin-left: 24%;">
				<li  class="btn btn-danger" ><a style="color: white;" href="employee.php"><span class=" glyphicon glyphicon-user"></span> Manage Employess</a></li>
			</div>
	</div>

	<div class="col-md-4" style="border-left: 10px solid white; height: 200px; background-color: #16E0BB">
			<div style="margin-top: 20%; margin-left: 30%;">
				<li  class="btn btn-danger" ><a style="color: white;" href="salereport.php"><span class=" glyphicon glyphicon-book"></span> Sales Report</a></li>
			</div>
	</div>

	<div class="col-md-4" style="border-left: 10px solid white; height: 200px; background-color: #16E0BB">
			<div style="margin-top: 20%; margin-left: 35%;">
				<li  class="btn btn-danger" ><a style="color: white;" href="users.php"><span class=" glyphicon glyphicon-user"></span> Users</a></li>
			</div>
	</div>
	
</div>
</div>

</body>
</html>