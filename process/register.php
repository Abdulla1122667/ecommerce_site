<?php
	include('../database.php');
?>
<?php
		$customer_name = $_POST['customer_name'];
		$customer_username = $_POST['customer_username'];
		$customer_password = $_POST['customer_password'];
		$customer_email = $_POST['customer_email'];
		$customer_phone = $_POST['customer_phone'];

		$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
		mysqli_query($conn, "INSERT INTO `customer` (`customer_name`, `customer_username`, `customer_password`, `customer_email`, `customer_phone`) VALUES ('".$customer_name."', '".$customer_username."', '".$customer_password."', '".$customer_email."', '".$customer_phone."');");
		
		header("Location: ../login-system.php");
?>