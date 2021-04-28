<?php
	session_start();
	//$_SESSION['admin_id']="";
	$_SESSION['loginErrorMessage'] ="";
	echo "session value is:";
	echo $_SESSION['admin_id'];
	if($_SESSION['admin_id'] > 0){
		$_SESSION['loginErrorMessage'] ="";
	}else{
		$_SESSION['loginErrorMessage'] ="<div class='alert alert-danger'>You have not login, Please login to proceed...</div>";
		header('Location: admin-login.php');
	}
?>