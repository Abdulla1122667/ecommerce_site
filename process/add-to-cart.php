<?php
		$customer_id = $_POST['customer_id'];
		$item_id = $_POST['item_id'];

		$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
		mysqli_query($conn, "INSERT INTO `cart` (`customer_id`, `item_id`) VALUES ('".$customer_id."', '".$item_id."');");
		
		header("Location: ../customer-home.php");

?>