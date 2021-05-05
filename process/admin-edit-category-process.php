<?php
	include('../database.php');
?>
<?php
		$category_id = $_POST['category_id'];
		$category_name = $_POST['category_name'];
		$category_details = $_POST['category_details'];
		$category_image = $_POST['category_image'];

		//echo $category_image;


		$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
		if(empty($category_image)){
			echo "inside empty";
			mysqli_query($conn, "UPDATE `category` SET `category_name` =".'"'.$category_name.'"'.", `category_details` =".'"'.$category_details.'"'." WHERE `category`.`category_id` =".$category_id.";");
		}else{
			echo "not not inside empty";
			echo "UPDATE `category` SET `category_name` =".'"'.$category_name.'"'.", `category_details` =".'"'.$category_details.'"'.", `category_image` =".'"'.$category_image.'"'." WHERE `category`.`category_id` =".$category_id.";";
			mysqli_query($conn, "UPDATE `category` SET `category_name` =".'"'.$category_name.'"'.", `category_details` =".'"'.$category_details.'"'.", `category_image` =".'"'.$category_image.'"'." WHERE `category`.`category_id` =".$category_id.";");
		}
		
		header("Location: ../admin-manage-category.php");

?>