		<?php include('header.php');?>
        <?php include('login-menu.php');?>
        <?php include('slider.php');?>

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
            	<h1>Welcome to Online Shopping</h1>
            	<h2>Select an product to buy</h2>

            	<p>
                <div class="admin-category">
                    <div class="row">
                <?php
                      $category_id = $_GET['category_id'];
                      $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                      $sql = mysqli_query($conn, "SELECT * FROM `item` where category_id =".$category_id);

                      while($data = mysqli_fetch_array($sql)){
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
                        <p><a href="#"><button type="button" class="btn btn-primary">Add to Cart</button></a></p>
                      </div>
                      
                    

                <?php } ?>
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