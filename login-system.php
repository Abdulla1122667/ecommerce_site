		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Login as Customer</h1>

                <?php
                    if($_SESSION['customerLoginErrorMessage']){ 
                        echo $_SESSION['customerLoginErrorMessage'];
                    }
                ?>

            	<form method="post" action="process/login.php">
            		<table>
            			<tr>
            				<td>Customer Username: *</td>
            				<td><input class="form-control" type="text" name="customer_username" id="customer_username" value="user" required="required"></td>
            			</tr>
            			<tr>
            				<td>Customer Password: *</td>
            				<td><input class="form-control" type="password" name="customer_password" id="customer_password" value="user" required="required"></td>
            			</tr>
            			<tr>
            				<td></td>
            				<td><input class="btn btn-primary" type="submit" name="submit" id="submit"></td>
            			</tr>
            		</table>
            	</form>

                <p> Do not have account? <a href="register-system.php"><button type="button" class="btn btn-warning">Register</button></a></p>
        	</div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>