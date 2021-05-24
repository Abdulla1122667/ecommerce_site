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

                <script>
                    function confirm(){
                        var customer_id = document.getElementById('customer_id').value;
                        var address = document.getElementById('address').value;
                        var message = document.getElementById('message').value;
                        
                        if(customer_id !== null && customer_id !== '' && address !== null && address !== '' && message !== null && message !== ''){
                            alert("Thank You for messaging us.");
                        }
                    }
                </script>
       
       	<div class="content">
            <div class="content">
                <h1>Contact Us</h1>
                <form method="post" action="process/contact-us.php" onclick="return confirm()">
                    <table>
                        <tr>
                            <td>Customer Id: *</td>
                            <td><input class="form-control" type="text" name="customer_id" id="customer_id" required="required" value="<?php echo $_SESSION['customer_id'] ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Address: *</td>
                            <td><input class="form-control" type="text" name="address" id="address" required="required"></td>
                        </tr>
                        <tr>
                            <td>Message: *</td>
                            <td><textarea class="form-control" name="message" id="message" required="required"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="btn btn-primary" type="submit" name="submit" id="submit"></td>
                        </tr>
                    </table>
                    
                </form>
            </div>

            <div class="content">
                <h1>Our Location</h1>
                <p>Sippy Downs, QLD 4556</p>
                <p>QueensLand, Australia</p>
                <p>Phone: +61-470-252-496</p>
                <p>Email: info@homecomfort.com</p>
            </div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>