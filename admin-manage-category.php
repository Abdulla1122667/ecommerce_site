		<?php include('header.php');?>
        <?php include('login-menu.php');?>
        <?php include('slider.php');?>
       
       	<div class="content">
            <div class="content">
            	<h1>Add Category</h1>

            	<script>
					function confirm(){
						var category_name = document.getElementById('category_name').value;
						var category_details = document.getElementById('category_details').value;
            var category_image = document.getElementById('category_image').value;
						
						if(category_name !== null && category_name !== '' && category_details !== null && category_details !== '' && category_image !== null && category_image !== ''){
							alert("Category added Successfully.");
						}
						
						
					}
				</script>

            	<form method="post" action="process/admin-add-category-process.php" onclick="return confirm()">
            		<table>
            			<tr>
            				<td>Category Name: *</td>
            				<td><input class="form-control" type="text" name="category_name" id="category_name" required="required"></td>
            			</tr>
            			<tr>
            				<td>Category Details: *</td>
            				<td><input class="form-control" type="text" name="category_details" id="category_details" required="required"></td>
            			</tr>
                  <tr>
                    <td>Category Image: *</td>
                    <td><input type="file" name="category_image" id="category_image" required="required" accept="image/*"></td>
                  </tr>
            			<tr>
            				<td></td>
            				<td><input class="btn btn-primary" type="submit" name="submit" id="submit"></td>
            			</tr>
            		</table>
            	</form>

            <h2>List of Categories</h2>
            <p>
                <div class="admin-category">
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
                        <img class="admin-home-img" src="images/category/<?php echo $category_image ?>">
                        <p>Category: <b><?php echo $category_name; ?></b></p>
                        <p><?php echo $category_details; ?></p>
                        <p><a href="process/admin-delete-category.php?category_id= <?php echo $category_id ?>"><button type="button" class="btn btn-danger">Delete</button></a></p>
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