<?php
	include('../database.php');
?>
<?php
		$category_name = $_POST['category_name'];
		$category_details = $_POST['category_details'];
		$category_image = $_POST['category_image'];

		//echo $category_image;


		$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
		mysqli_query($conn, "INSERT INTO `category` (`category_name`, `category_details`, `category_image`) VALUES ('".$category_name."', '".$category_details."', '".$category_image."');");
		
		header("Location: ../admin-manage-category.php");

?>