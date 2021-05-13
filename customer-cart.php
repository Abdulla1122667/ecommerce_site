		<?php include('header.php');?>
        <?php include('login-menu.php');?>
        <?php include('slider.php');?>
        <?php
// Include configuration file
include_once 'config.php'; 

 // Include database connection file 
 include_once 'database.php'; 
 ?>

        <?php
            $_SESSION['customerLoginErrorMessage'] ="";
            if($_SESSION['customer_id'] > 0){
                $_SESSION['customerLoginErrorMessage'] ="";
            }else{
                $_SESSION['customerLoginErrorMessage'] ="<div class='alert alert-danger'>You have not login, Please login to proceed...</div>";
                header('Location: login-system.php');
            }
        ?>
       
       	<div class="content">
            <div class="content">
            	<h1>Welcome to Your Cart</h1>
            	<h2>These are the products you have added to the cart.</h2>

            	<p>
                <div class="admin-category">
                    <div class="row">
                <?php
                      $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                      $sql = mysqli_query($conn, "SELECT * FROM item, cart WHERE item.item_id = cart.item_id AND cart.customer_id =".$_SESSION['customer_id']);

                      $hasData = false;
                      while($data = mysqli_fetch_array($sql)){
                        $hasData =true;
                        $cart_id = $data['cart_id'];
                        $item_id = $data['item_id'];
                        $category_id = $data['category_id'];
                        $item_name = $data['item_name'];
                        $item_price = $data['item_price'];
                        $item_details = $data['item_details'];
                        $item_image = $data['item_image'];
                        $added_by_admin = $data['added_by_admin'];
                ?>

                      <div class="col-md-4">
                        <img src="images/items/<?php echo $item_image ?>">
                        <p>Product Name: <b><?php echo $item_name; ?></b></p>
                        <p>Price: <b><?php echo $item_price; ?></b></p>
                        <p><?php echo $item_details; ?></p>
                        <p><a href="process/delete-from-cart.php?cart_id= <?php echo $cart_id; ?>"><button type="button" class="btn btn-danger">Remove from Cart</button></a></p>

                        <p>
<form action="<?php echo PAYPAL_URL; ?>" method="post">
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">                                                                                                
  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">                                                                                        

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="<?php echo $item_name; ?>">
  <input type="hidden" name="item_number" value="<?php echo $item_id; ?>">
  <input type="hidden" name="amount" value="<?php echo $item_price; ?>">
  <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
  <!-- Specify URLs -->
  <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
  <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">                                                                                                

  <!-- Display the payment button. -->

  <input class="btn btn-primary" type="submit" name="submit" value="Checkout with Paypal" />
</form>
                        </p>
                      </div>
                      
                    

                <?php 
                      }
                      if(!$hasData){
                        echo "<div class='alert alert-danger'>Sorry!!! No Product has been added to cart.</div>";
                      }
                 ?>
                  </div>
                </div>

                
              </p>
            
        		  
        	</div>
            

          <p><a href="customer-home.php"> <-- Back to Category</a></p>
        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>