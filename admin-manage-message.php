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
              <h2>List of Customer Message</h2>
                <table class="table table-striped">
                <tr>
                  <th>Contact ID</th>
                  <th>Customer ID</th>
                  <th>Address</th>
                  <th>Message</th>
                  <th>Edit</th>
                </tr>

              <?php
                $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                $sql = mysqli_query($conn, "SELECT * FROM `contact`");

                while($data = mysqli_fetch_array($sql)){
                    $contact_id = $data['contact_id']; 
                  echo "<tr>";
                    echo "<td>".$contact_id."</td>";
                    echo "<td>".$data['customer_id']."</td>";
                    echo "<td>".$data['address']."</td>";
                    echo "<td>".$data['message']."</td>";
                    echo "<td><a href='process/admin-delete-message.php?contact_id=$contact_id'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
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