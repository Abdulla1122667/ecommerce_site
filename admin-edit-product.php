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
                <h1>Edit Products</h1>

                <script>
                    function confirm(){
                        var item_name = document.getElementById('item_name').value;
                        var item_price = document.getElementById('item_price').value;
                        var item_details = document.getElementById('item_details').value;
                        var item_image = document.getElementById('item_image').value;
                        
                        if(item_name !== null && item_name !== '' && item_price !== null && item_price !== '' && item_details !== null && item_details !== '' && item_image !== null && item_image !== ''){
                            alert("Product edited Successfully.");
                        }
                        
                        
                    }
                </script>

                <?php
                    $item_id = $_GET['product_id'];

                    
                    $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                    $sql = mysqli_query($conn, "SELECT * FROM `item` WHERE item_id=".$item_id);

                    while($data = mysqli_fetch_array($sql)){
                        $category_id = $data['category_id'];
                        $item_name = $data['item_name'];
                        $item_price = $data['item_price'];
                        $item_details = $data['item_details'];
                        $item_image = $data['item_image'];
                        $added_by_admin = $data['added_by_admin'];
                    }
                ?>

                <form method="post" action="process/admin-edit-product-process.php">
                    <table>
                        <tr>
                            <td>Product ID: *</td>
                            <td><input class="form-control" type="text" name="item_id" id="item_id" required="required" readonly value="<?php echo $item_id; ?>"></td>
                        </tr>
                        <tr>
                            <td>Category: *</td>
                            <td><select name="category_id" id="category_id">
                                
                                    <?php
                                        $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                                        $sql = mysqli_query($conn, "SELECT * FROM `category`");

                                        while($data = mysqli_fetch_array($sql)){
                                            $id = $data['category_id']." - ".$data['category_name'];
                                        ?>
                                        <option value="<?php echo $id; ?>" <?php if(strcmp($data['category_id'], $category_id) == 0) echo "selected";  ?>><?php echo $id; ?></option>
                                        <?php
                                        }
                                              
                                      ?>
                                </option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Product Name: *</td>
                            <td><input class="form-control" type="text" name="item_name" id="item_name" required="required" value="<?php echo $item_name; ?>"></td>
                        </tr>
                        <tr>
                            <td>Product Price: *</td>
                            <td><input class="form-control" type="number" name="item_price" id="item_price" required="required" value="<?php echo $item_price; ?>"></td>
                        </tr>
                        <tr>
                            <td>Product Details: *</td>
                            <td><input class="form-control" type="text" name="item_details" id="item_details" required="required" value="<?php echo $item_details; ?>"></td>
                        </tr>
                        <tr>
                            <td>Product Image Name: </td>
                            <td><input type="file" name="item_image" id="item_image" accept="image/*"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="btn btn-primary" type="submit" name="submit" id="submit" onclick="return confirm()"></td>
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