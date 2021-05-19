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
              <h2>Sales Details</h2>
                <form method="post">
                  Search by Date: <input type="date" name="inputDate" id="inputDate" />
                  <input type="submit" name="submit" />
                </form>
                <table class="table table-striped">
                <tr>
                  <th>Purchase ID</th>
                  <th>Customer Name</th>
                  <th>Customer Username</th>
                  <th>Item Name</th>
                  <th>Item Price</th>
                  <th>Category ID</th>
                  <th>Purchase Date</th>
                  <th>Purchase Status</th>
                  <th>Edit</th>
                </tr>

              <?php
                $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                $sql = mysqli_query($conn, "SELECT purchase.purchase_id, customer.customer_name, customer.customer_username, item.item_name, item.item_price, item.category_id, purchase.purchase_date, purchase.purchase_status FROM purchase, customer, item WHERE customer.customer_id = purchase.customer_id and item.item_id = purchase.item_id");

                if(isset($_POST['inputDate'])){
                  $sql = mysqli_query($conn, "SELECT purchase.purchase_id, customer.customer_name, customer.customer_username, item.item_name, item.item_price, item.category_id, purchase.purchase_date, purchase.purchase_status FROM purchase, customer, item WHERE customer.customer_id = purchase.customer_id and item.item_id = purchase.item_id and purchase.purchase_date=".'"'.$_POST['inputDate'].'"');
                }

                while($data = mysqli_fetch_array($sql)){
                   $purchase_id = $data['purchase_id']; 
                  echo "<tr>";
                    echo "<td>".$purchase_id."</td>";
                    echo "<td>".$data['customer_name']."</td>";
                    echo "<td>".$data['customer_username']."</td>";
                    echo "<td>".$data['item_name']."</td>";
                    echo "<td>".$data['item_price']."</td>";
                    echo "<td>".$data['category_id']."</td>";
                    echo "<td>".$data['purchase_date']."</td>";
                    $status = "Paid";
                    if($data['purchase_status'] == 0){
                      $status = "Payment Pending";
                    }
                    echo "<td>".$status."</td>";
                    echo "<td><a href='process/admin-delete-sales.php?purchase_id=$purchase_id'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
                  echo "</tr>";
                }
                      
              ?>
            </table>
                  
            </div>

            <a href="admin-home.php"><-- Back to Admin Home</a>
        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>