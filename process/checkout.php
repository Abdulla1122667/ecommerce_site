

<?php
	$customer_id = $_POST['customer_id'];
	$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
	$sql = mysqli_query($conn, "SELECT * FROM item, cart WHERE item.item_id = cart.item_id AND cart.customer_id =".$customer_id);

	while($data = mysqli_fetch_array($sql)){
		$cart_id = $data['cart_id'];
		$item_id = $data['item_id'];
		$category_id = $data['category_id'];
		$item_name = $data['item_name'];
		$item_price = $data['item_price'];
		$item_details = $data['item_details'];
		$item_image = $data['item_image'];
		$added_by_admin = $data['added_by_admin'];

		$number_of_items = 1;
		$purchase_date = date("Y/m/d");
		$purchase_status = 0;

		mysqli_query($conn, "INSERT INTO `purchase` (`customer_id`, `item_id`, `number_of_items`, `purchase_date`, `purchase_status`) VALUES ('".$customer_id."', '".$item_id."', '".$number_of_items."', '".$purchase_date."', '".$purchase_status."');");

		mysqli_query($conn, "DELETE FROM `cart` WHERE cart_id = ".$cart_id);

		header("Location: ../customer-home.php");
	}
?>