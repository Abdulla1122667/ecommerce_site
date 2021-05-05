<?php
	include('../database.php');
?>
<?php
		$customer_id = $_POST['customer_id'];
		$address = $_POST['address'];
		$message = $_POST['message'];

		$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
		mysqli_query($conn, "INSERT INTO `contact` (`customer_id`, `address`, `message`) VALUES ('".$customer_id."', '".$address."', '".$message."');");
		
		header("Location: ../contact-us.php");
?>