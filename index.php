		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Welcome to Home Comfort - Buy With Us</h1>
            
        		  <p> Welcome to Home Comfort – Buy with us. We have varieties of products you can buy from. Simply register with our user friendly REGISTER interface and get started. You can then login from LOGIN menu and start buying. There are different categories from where you can choose. Choose the products you want to buy and then checkout. Thank you for choosing us. Happy Shopping!!!</p>

        		<h1>Our Products</h1>
                <p>
                <div class="admin-category">
                    <div class="row">
                <?php
                      $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                      $sql = mysqli_query($conn, "SELECT * FROM `item`");

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
                        <img id="<?php echo $item_image; ?>" alt="<?php echo $item_name; ?>" src="images/items/<?php echo $item_image; ?>" onclick="return imgClick('<?php echo $item_image; ?>')" />
                        <p>Product Name: <b><?php echo $item_name; ?></b></p>
                        <p>Price (In $USD): <b><?php echo $item_price; ?></b></p>
                        <p><?php echo $item_details; ?></p>
                        <p>
                            <a href="login-system.php"><button class="btn btn-primary">Buy</button></a>
                        </p>
                      </div>
                      
                    

                <?php } ?>
                  </div>
                </div>

                
              </p>

        	</div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>