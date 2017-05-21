<?php

include 'config.php';
if(isset($_POST['login'])){
	if($_POST['role'] == 'Administrator'){
	session_start();

	$username =$_POST['username'];
	$pass = $_POST['pass'];
	$role = $_POST['role'];
	$sql="SELECT * from user where username='$username' AND password='$pass' AND position='$role'";
	$res=$conn->query($sql);
	$row=$res->fetch_assoc();
	if($res->num_rows > 0){
			$_SESSION['username'] = $username;
         	$_SESSION['pass'] = $pass;

		header("Refresh: 0 ; URL=dashboard.php");
	}
	else{
		echo "Invalid email or password";
		header("location: index.php");

	
}
}

elseif ($_POST['role'] =='Employee') {
	session_start();
	$username =$_POST['username'];
	$pass = $_POST['pass'];
	$role = $_POST['role'];
	$sql="SELECT * from user where username='$username' AND password='$pass' AND position='$role'";
	$resulte=$conn->query($sql);
	$row=$resulte->fetch_assoc();
	if($resulte->num_rows > 0){
			$_SESSION['username'] = $username;
         	$_SESSION['pass'] = $pass;

		header("Refresh: 0 ; URL=emp_dash.php");
	}
	else{
		echo "Invalid email or password";
		header("location: index.php");
	}
	

}
elseif ($_POST['role'] =='Customer') {
	session_start();
	$username =$_POST['username'];
	$pass = $_POST['pass'];
	$role = $_POST['role'];
	$sql="SELECT * from user where username='$username' AND password='$pass' AND position='$role'";
	$resulte=$conn->query($sql);
	$row=$resulte->fetch_assoc();
	if($resulte->num_rows > 0){
			$_SESSION['username'] = $username;
         	$_SESSION['pass'] = $pass;

		header("Refresh: 0 ; URL=placeorder.php");
	}
	else{
		echo "Invalid email or password";
		header("location: index.php");
	}
	

}



}




?>