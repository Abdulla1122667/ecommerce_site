<?php
	$category_id = $_GET['category_id'];
	echo "category_id= ".$category_id;
	$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
    mysqli_query($conn, "DELETE FROM `category` WHERE category_id = ".$category_id);

    
	header('Location: ../admin-manage-category.php');
?>