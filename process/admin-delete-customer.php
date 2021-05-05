<?php
	$customer_id = $_GET['customer_id'];
	//echo "customer_id= ".$customer_id;
	$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
    mysqli_query($conn, "DELETE FROM `customer` WHERE customer_id = ".$customer_id);

    
	header('Location: ../admin-manage-customer.php');
?>