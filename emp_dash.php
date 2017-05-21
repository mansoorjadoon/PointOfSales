
<!DOCTYPE html>
<html>
<head>
	<title>Employee Dashboard</title>
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>

<?php
include 'config.php';
include 'session.php';
?>


<div class="jumbotron text-center">
<h1>
<?php
if(isset($_SESSION['username'])){
echo "Hello 	";
echo $login_session;
}
?>
</h1>
</div>

</br><a style="margin-left: 40%;" class="btn btn-primary text-center" href="inventory.php"> Manage Inventory </a>
<a style="margin-right: 40%;" class="btn btn-danger text-center" href="logout.php" style="float: right;">Logout</a> 
</html>