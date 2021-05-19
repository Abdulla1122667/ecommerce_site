<?php
// Include configuration file
include_once '../config.php'; 

 // Include database connection file 
 include_once '../database.php'; 

	//$customer_id = $_POST['customer_id'];
	$conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
	$cart_id = $_GET['cart_id'];
	$item_id = $_GET['item_id'];
	$customer_id = $_GET['customer_id'];
	
	$number_of_items = 1;
	$purchase_date = date("Y/m/d");
	$purchase_status = 1;

	mysqli_query($conn, "INSERT INTO `purchase` (`customer_id`, `item_id`, `number_of_items`, `purchase_date`, `purchase_status`) VALUES ('".$customer_id."', '".$item_id."', '".$number_of_items."', '".$purchase_date."', '".$purchase_status."');");

	mysqli_query($conn, "DELETE FROM `cart` WHERE cart_id = ".$cart_id);
	

	
  $sql = mysqli_query($conn, "SELECT * FROM item WHERE item_id=".$item_id);
  while($data = mysqli_fetch_array($sql)){
    $item_id = $data['item_id'];
    $item_name = $data['item_name'];
    $item_price = $data['item_price'];
?>

<script>
	window.onload = function(){
	  document.forms['formm'].submit();
	}
</script>
<p>
	<form action="<?php echo PAYPAL_URL; ?>" method="post" id="formm" name="formm">
	  <!-- Identify your business so that you can collect the payments. -->
	  <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">                                                                                                
	  <!-- Specify a Buy Now button. -->
	  <input type="hidden" name="cmd" value="_xclick">                                                                                        

	  <!-- Specify details about the item that buyers will purchase. -->
	  <input type="hidden" name="item_name" id="item_name" value="<?php echo $item_name; ?>">
	  <input type="hidden" name="item_number" value="<?php echo $item_id; ?>">
	  <input type="hidden" name="amount" value="<?php echo $item_price; ?>">
	  <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">

	  <input id="rm" name="rm" type="hidden" value="2">
	  <!-- Specify URLs -->
	  <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
	  <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">                                                                                                

	  <!-- Display the payment button. -->

	  <!-- <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Checkout with Paypal" /> -->
	</form>
</p>

<?php } ?>