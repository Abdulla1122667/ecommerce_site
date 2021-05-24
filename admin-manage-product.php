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
                <h1>Add Products</h1>

                <script>
                    function confirm(){
                        var item_name = document.getElementById('item_name').value;
                        var item_price = document.getElementById('item_price').value;
                        var item_details = document.getElementById('item_details').value;
                        var item_image = document.getElementById('item_image').value;
                        
                        if(item_name !== null && item_name !== '' && item_price !== null && item_price !== '' && item_details !== null && item_details !== '' && item_image !== null && item_image !== ''){
                            alert("Product added Successfully.");
                        }
                        
                        
                    }
                </script>

                <form method="post" action="process/admin-add-product-process.php" onclick="return confirm()">
                    <table>
                        <tr>
                            <td>Category: *</td>
                            <td><select name="category_id" id="category_id">
                                
                                    <?php
                                        $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                                        $sql = mysqli_query($conn, "SELECT * FROM `category`");

                                        while($data = mysqli_fetch_array($sql)){
                                            $id = $data['category_id']." - ".$data['category_name'];
                                        ?>
                                        <option value="<?php echo $id; ?>"><?php echo $id; ?></option>
                                        <?php
                                        }
                                              
                                      ?>
                                </option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Product Name: *</td>
                            <td><input class="form-control" type="text" name="item_name" id="item_name" required="required"></td>
                        </tr>
                        <tr>
                            <td>Product Price: *</td>
                            <td><input class="form-control" type="number" name="item_price" id="item_price" required="required"></td>
                        </tr>
                        <tr>
                            <td>Product Details: *</td>
                            <td><input class="form-control" type="text" name="item_details" id="item_details" required="required"></td>
                        </tr>
                        <tr>
                            <td>Product Image Name: *</td>
                            <td><input type="file" name="item_image" id="item_image" required="required" accept="image/*"></td>
                        </tr>
                        <tr>
                            <td>Added by Admin: *</td>
                            <td><input class="form-control" type="text" name="added_by_admin" id="added_by_admin" value="<?php echo $_SESSION['admin_id']; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="btn btn-primary" type="submit" name="submit" id="submit"></td>
                        </tr>
                    </table>
                </form>

            <h2>List of Products</h2>
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
                        <img class="admin-home-img" src="images/items/<?php echo $item_image ?>">
                        <p>Product ID: <b><?php echo $item_id; ?></b></p>
                        <p>Product Name: <b><?php echo $item_name; ?></b></p>
                        <p>Category: <b><?php echo $category_id; ?></b></p>
                        <p>Price (In $USD): <b><?php echo $item_price; ?></b></p>
                        <p>Added by Admin ID: <b><?php echo $added_by_admin; ?></b></p>
                        <p><?php echo $item_details; ?></p>
                        <p>
                            <a href="admin-edit-product.php?product_id= <?php echo $item_id ?>"><button type="button" class="btn btn-success">Edit</button>
                            <a href="process/admin-delete-product.php?product_id= <?php echo $item_id ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                        </p>
                      </div>
                      
                    

                <?php } ?>
                  </div>
                </div>

                
              </p>
                  
            </div>

            <a href="admin-home.php"><-- Back to Admin Home</a>
        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>