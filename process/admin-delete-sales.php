<?php
	$purchase_id = $_GET['purchase_id'];
	$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
    mysqli_query($conn, "DELETE FROM `purchase` WHERE purchase_id =".$purchase_id);

    
	header('Location: ../admin-manage-sales.php');
?>