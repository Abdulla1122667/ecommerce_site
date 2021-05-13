

        <?php include('header.php');?>
        <?php include('menu.php');?>
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
                <h1 class="success">Paypal Payment Result </h1>
               
                    <div class="alert alert-danger">Your PayPal Transaction has been Canceled</div>
           

                  <a href="customer-cart.php"> <-- Back to Cart </a>
            </div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>