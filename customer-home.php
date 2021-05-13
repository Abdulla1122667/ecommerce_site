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
            	<h1>Welcome to Customer Home</h1>

            	<h2>Search Individual Product</h2>
              <div class="customer-category">
                <div class="col-md-4">
                  <a href="customer-search-product.php"><img class="admin-home-img" src="images/search.jpg">
                  <p class="menu-item">Search Indiviudal Product </p></a>
                </div>
              </div>

              <h2>Select an category of product</h2>
            	<p>
                <div class="customer-category">
                    <div class="row">
                <?php
                    
                      $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                      $sql = mysqli_query($conn, "SELECT * FROM `category`");

                      while($data = mysqli_fetch_array($sql)){
                        $category_id = $data['category_id'];
                        $category_name = $data['category_name'];
                        $category_details = $data['category_details'];
                        $category_image = $data['category_image'];
                ?>

                
                      <div class="col-md-4">
                        <a href="customer-product.php?category_id= <?php echo $category_id; ?>"><img class="admin-home-img" src="images/category/<?php echo $category_image ?>">
                        <p class="menu-item"><?php echo $category_name; ?> </p></a>
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