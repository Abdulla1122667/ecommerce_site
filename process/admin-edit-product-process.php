<?php
	include('../database.php');
?>
<?php
	$item_id = $_POST['item_id'];
	$category_id = $_POST['category_id'];
	$category_id = explode(" - ", $category_id)[0];
	$item_name = $_POST['item_name'];
	$item_price = $_POST['item_price'];
	$item_details = $_POST['item_details'];
	$item_image = $_POST['item_image'];
	$added_by_admin = $_POST['added_by_admin'];

	$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
	if(empty($item_image)){
		mysqli_query($conn, "UPDATE `item` SET `category_id` =".'"'.$category_id.'"'.", `item_name` =".'"'.$item_name.'"'.", `item_price` =".'"'.$item_price.'"'.", `item_details` =".'"'.$item_details.'"'." WHERE `item`.`item_id` =".$item_id.";");
	}else{
		mysqli_query($conn, "UPDATE `item` SET `category_id` =".'"'.$category_id.'"'.", `item_name` =".'"'.$item_name.'"'.", `item_price` =".'"'.$item_price.'"'.", `item_details` =".'"'.$item_details.'"'.", `item_image` =".'"'.$item_image.'"'." WHERE `item`.`item_id` =".$item_id.";");
	}
	
	header("Location: ../admin-manage-product.php");
?>