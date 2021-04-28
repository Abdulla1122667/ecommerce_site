<?php
	session_start();
	$_SESSION['customer_id']="";
?>
<?php
	include("../database.php");
?>
<?php
	if(isset($_POST['submit'])){
		$customer_username = $_POST['customer_username'];
		$customer_password = $_POST['customer_password'];

		$conn = mysqli_connect("localhost","root","","ecommerce_db");
		$sql = mysqli_query($conn, "SELECT * FROM customer WHERE customer_username= '".$customer_username."' and customer_password = '".$customer_password."'");
		$data = mysqli_fetch_array($sql);
		
		if(mysqli_num_rows($sql)>0){
			echo "login successful";
			$_SESSION['customer_id']=$data['customer_id'];
			header('Location: ../customer-home.php');	
		}else{
			//echo "login failed";
			
			header('Location: ../login-failed.php');
		}
	}
?>