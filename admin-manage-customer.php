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
              <h2>List of Customer</h2>
                <table class="table table-striped">
                <tr>
                  <th>Customer ID</th>
                  <th>Customer Name</th>
                  <th>Customer Username</th>
                  <th>Customer Password</th>
                  <th>Customer Email</th>
                  <th>Customer Phone</th>
                  <th>Edit</th>
                </tr>

              <?php
                $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                $sql = mysqli_query($conn, "SELECT * FROM `customer`");

                while($data = mysqli_fetch_array($sql)){
                    $customer_id = $data['customer_id']; 
                  echo "<tr>";
                    echo "<td>".$customer_id."</td>";
                    echo "<td>".$data['customer_name']."</td>";
                    echo "<td>".$data['customer_username']."</td>";
                    echo "<td>".$data['customer_password']."</td>";
                    echo "<td>".$data['customer_email']."</td>";
                    echo "<td>".$data['customer_phone']."</td>";
                    echo "<td><a href='process/admin-delete-customer.php?customer_id=$customer_id'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
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