<?php
	include('database.php');
?>
<?php
		$category_id = $_POST['category_id'];
		$category_id = explode(" - ", $category_id)[0];
		$item_name = $_POST['item_name'];
		$item_price = $_POST['item_price'];
		$item_details = $_POST['item_details'];
		$item_image = $_POST['item_image'];
		$added_by_admin = $_POST['added_by_admin'];

		$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
		mysqli_query($conn, "INSERT INTO `item` (`category_id`, `item_name`, `item_price`, `item_details`, `item_image`, `added_by_admin`) VALUES ('".$category_id."', '".$item_name."', '".$item_price."', '".$item_details."', '".$item_image."', '".$added_by_admin."');");
		
		header("Location: ../admin-manage-product.php");
?>