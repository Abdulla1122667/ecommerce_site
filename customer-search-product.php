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
            alert("Product Added to the Cart. Please check the cart.");
            
            
          }
        </script>
       
       	<div class="content">
            <div class="content">
            	<h1>Welcome to Online Shopping</h1>
            	<h2>Search Individual Product</h2>
              <p>
                <form method="post">
                  <table>
                    <tr>
                      <td>Enter Product Name:</td>
                      <td><input class="form-control" type="text" name="item_name" id="item_name" /></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><input class="btn btn-primary" type="submit" name="submit" id="submit" value="Search" /></td>
                    </tr>
                  </table>
                   
                </form>
              </p>

            	<p>
                <div class="admin-category">
                    <div class="row">

                <?php
                    if(isset($_POST['item_name'])){
                      $item_name = $_POST['item_name'];
                      $conn = mysqli_connect("localhost", "root", "", "ecommerce_db");
                      $sql = mysqli_query($conn, "SELECT * FROM `item` where item_name LIKE ".'"%'.$item_name.'%"');
                      $hasItem = false;

                      while($data = mysqli_fetch_array($sql)){
                        $hasItem = true;
                        $item_id = $data['item_id'];
                        $category_id = $data['category_id'];
                        $item_name = $data['item_name'];
                        $item_price = $data['item_price'];
                        $item_details = $data['item_details'];
                        $item_image = $data['item_image'];
                        $added_by_admin = $data['added_by_admin'];
                ?>

                      <div class="col-md-4">
                        <img id="<?php echo $item_image; ?>" alt="<?php echo $item_name; ?>" src="images/items/<?php echo $item_image; ?>" onclick="return imgClick('<?php echo $item_image; ?>')" />
                        <p>Product Name: <b><?php echo $item_name; ?></b></p>
                        <p>Price: <b><?php echo $item_price; ?></b></p>
                        <p><?php echo $item_details; ?></p>
                        <p>
                          <form method="post" action="process/add-to-cart.php">
                            <input type="hidden" name="customer_id" id="customer_id" value="<?php echo $_SESSION['customer_id']; ?>" />
                            <input type="hidden" name="item_id" id="item_id" value="<?php echo $item_id; ?>" />
                            <input class="btn btn-primary" type="submit" name="submit" value="Add to Cart"  onclick="return confirm()" />
                          </form>
                        </p>
                      </div>
                      
                    

                <?php 

                      }
                      if(!$hasItem){
                        echo "<div class='alert alert-danger'>Sorry!!! No Product is Found.</div>";
                      }
                    } 
                ?>
                  </div>
                </div>

                
              </p>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<script>
function imgClick(imgId){
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById(imgId);
console.log("img id is: "+img);
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}

}
</script>            
        		  
        	</div>

          <p><a href="customer-home.php"> <-- Back to Category</a></p>
        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>