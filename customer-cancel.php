

        <?php include('header.php');?>
        <?php include('login-menu.php');?>
        <?php include('slider.php');?>

        <?php
            // $_SESSION['customerLoginErrorMessage'] ="";
            // if($_SESSION['customer_id'] > 0){
            //     $_SESSION['customerLoginErrorMessage'] ="";
            // }else{
            //     $_SESSION['customerLoginErrorMessage'] ="<div class='alert alert-danger'>You have not login, Please login to proceed...</div>";
            //     header('Location: login-system.php');
            // }

                $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                $sql = mysqli_query($conn, "SELECT * FROM `purchase`");

                $purchase_id = 0;
                while($data = mysqli_fetch_array($sql)){
                    $purchase_id = $data['purchase_id'];
                }

                mysqli_query($conn, "DELETE FROM `purchase` WHERE purchase_id =".$purchase_id);
        ?>
       
        <div class="content">
            <div class="content">
                <h1>Paypal Payment Result </h1>
               
                    <div class="alert alert-danger">Your PayPal Transaction has been Canceled</div>
           

                  <a href="customer-cart.php"> <-- Back to Cart </a>
            </div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>