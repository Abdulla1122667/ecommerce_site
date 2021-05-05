		<?php include('header.php');?>
        <?php include('admin-menu.php');?>
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
            	<h1>Edit Category</h1>

            	<script>
					function confirm(){
						var category_name = document.getElementById('category_name').value;
						var category_details = document.getElementById('category_details').value;
                        var category_image = document.getElementById('category_image').value;
						
						if(category_name !== null && category_name !== '' && category_details !== null && category_details !== ''){
							alert("Category Edited Successfully.");
						}
						
						
					}
				</script>

                <?php
                    $category_id = $_GET['category_id'];

                    
                    $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                    $sql = mysqli_query($conn, "SELECT * FROM `category` WHERE category_id=".$category_id);

                    while($data = mysqli_fetch_array($sql)){
                        $category_id = $data['category_id'];
                        $category_name = $data['category_name'];
                        $category_details = $data['category_details'];
                        $category_image = $data['category_image'];
                    }
                ?>

            	<form method="post" action="process/admin-edit-category-process.php">
            		<table>
                        <tr>
                            <td>Category ID: *</td>
                            <td><input class="form-control" type="text" name="category_id" id="category_id" required="required" readonly value="<?php echo $category_id; ?>"></td>
                        </tr>
            			<tr>
            				<td>Category Name: *</td>
            				<td><input class="form-control" type="text" name="category_name" id="category_name" required="required" value="<?php echo $category_name; ?>"></td>
            			</tr>
            			<tr>
            				<td>Category Details: *</td>
            				<td><input class="form-control" type="text" name="category_details" id="category_details" required="required" value="<?php echo $category_details; ?>"></td>
            			</tr>
                  <tr>
                    <td>Category Image: </td>
                    <td><input type="file" name="category_image" id="category_image" accept="image/*"></td>
                  </tr>
            			<tr>
            				<td></td>
            				<td><input class="btn btn-primary" type="submit" name="submit" id="submit"  onclick="return confirm()"></td>
            			</tr>
            		</table>
            	</form>
        		  
        	</div>

            <a href="admin-home.php"><-- Back to Admin Home</a>
        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>