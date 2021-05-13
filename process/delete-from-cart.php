<?php
	$cart_id = $_GET['cart_id'];
	$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
    mysqli_query($conn, "DELETE FROM `cart` WHERE cart_id = ".$cart_id);

    
	header('Location: ../customer-cart.php');
?>