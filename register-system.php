		<?php include('header.php');?>
        <?php include('menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Register as Customer</h1>

            	<script>
					function passwordRetypeCheck(){
						var customer_password = document.getElementById('customer_password').value;
						var repassword = document.getElementById('repassword').value;
						
						if(customer_password!=repassword){
							alert("Password and Retype Password does not match!!!");
							return false;
						}else{
							alert("User Registered Successfully.")
						}
						
					}
				</script>

            	<form method="post" action="process/register.php" onsubmit="return passwordRetypeCheck()">
            		<table>
            			<tr>
            				<td>Customer Name: *</td>
            				<td><input class="form-control" type="text" name="customer_name" id="customer_name" placeholder="e.g. Abdulla" required="required"></td>
            			</tr>
            			<tr>
            				<td>Customer Username: *</td>
            				<td><input class="form-control" type="text" name="customer_username" id="customer_username" placeholder="e.g. Hamumantha1" required="required"></td>
            			</tr>
            			<tr>
            				<td>Password: *</td>
            				<td><input class="form-control" type="password" name="customer_password" id="customer_password" placeholder="Enter strong password" required="required"></td>
            			</tr>
            			<tr>
            				<td>Retype Password: *</td>
            				<td><input class="form-control" type="password" name="repassword" id="repassword" placeholder="Retype above password" required="required"></td>
            			</tr>
            			<tr>
            				<td>Customer Email: *</td>
            				<td><input class="form-control" type="email" name="customer_email" id="customer_email" placeholder="e.g. ravneet_kaur@gmail.com" required="required"></td>
            			</tr>
            			<tr>
            				<td>Customer Phone: *</td>
            				<td><input class="form-control" type="text" name="customer_phone" id="customer_phone" placeholder="e.g. +61470308901" required="required"></td>
            			</tr>
            			<tr>
            				<td></td>
            				<td><input class="btn btn-primary" type="submit" name="submit" id="submit"></td>
            			</tr>
            		</table>
            	</form>

                <p> Already have account? <a href="login-system.php"><button type="button" class="btn btn-warning">Login</button></a></p>
        	</div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>