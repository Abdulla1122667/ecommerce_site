		
        <?php include('header.php');?>
        <?php include('login-menu.php');?>
        <?php include('slider.php');?>

        <?php
            $_SESSION['loginErrorMessage'] ="";
            if($_SESSION['admin_id'] > 0){
                $_SESSION['loginErrorMessage'] ="";
            }else{
                $_SESSION['loginErrorMessage'] ="<div class='alert alert-danger'>You have not login, Please login to proceed...</div>";
                header('Location: admin-login.php');
            }
        ?>
       
       	<div class="content">
            <div class="content">
            	<h1>Welcome to Admin Panel</h1>
            	<h2>Select a menu to continue...</h2>


                <div class="admin-home">
                    <div class="row">
                      <div class="col-md-4">
                        <a href="admin-manage-category.php"><img class="admin-home-img" src="images/category.png">
                        <p class="menu-item">Manage Category</p></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><img class="admin-home-img" src="images/products.jpg">
                        <p class="menu-item">Manage Products</p></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><img src="images/users.png">
                        <p class="menu-item">User Management</p></a>
                      </div>
                      <div class="col-md-4">
                        <a href="#"><img src="images/sales.jpg">
                        <p class="menu-item">View Sales</p></a>
                      </div>
                      <div class="col-md-4">
                        <a href="logout.php"><img src="images/logout.png">
                        <p class="menu-item">Logout</p></a>
                      </div>
                    </div>
                </div>
            
        		  
        	</div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>