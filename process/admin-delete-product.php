<?php
	$item_id = $_GET['product_id'];
	$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
    mysqli_query($conn, "DELETE FROM `item` WHERE item_id = ".$item_id);

    
	header('Location: ../admin-manage-product.php');
?>