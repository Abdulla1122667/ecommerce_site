<?php
	$contact_id = $_GET['contact_id'];
	$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
    mysqli_query($conn, "DELETE FROM `contact` WHERE contact_id = ".$contact_id);

    
	header('Location: ../admin-manage-message.php');
?>