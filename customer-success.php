<?php 
 // Include configuration file 
 include_once 'config.php'; 

 // Include database connection file 
 include_once 'database.php'; 

echo $PayerID = $_GET['PayerID'];
 // If transaction data is available in the URL 

/*
 if(!empty($_GET['item_number']) && !empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st'])){
echo "inside if";	 
     // Get transaction information from URL 
     $item_number = $_GET['item_number'];  
     $txn_id = $_GET['tx']; 
     $payment_gross = $_GET['amt']; 
     $currency_code = $_GET['cc']; 
     $payment_status = $_GET['st']; 

     // Get product info from the database 
     $productResult = $db->query("SELECT * FROM products WHERE id = ".$item_number); 
     $productRow = $productResult->fetch_assoc(); 
	 
     // Check if transaction data exists with the same TXN ID. 
     $prevPaymentResult = $db->query("SELECT * FROM payments WHERE txn_id = '".$txn_id."'"); 
     if($prevPaymentResult->num_rows > 0){ 
         $paymentRow = $prevPaymentResult->fetch_assoc(); 
         echo $payment_id = $paymentRow['payment_id']; 
         $payment_gross = $paymentRow['payment_gross']; 
         $payment_status = $paymentRow['payment_status']; 
}else{ 
echo "inside else";
         // Insert transaction data into the database 
         $insert = $db->query("INSERT INTO payments(item_number,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')"); 
         echo $payment_id = $db->insert_id; 
} 
}
*/ 
 ?>

        <?php include('header.php');?>
        <?php include('menu.php');?>
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
       
        <div class="content">
            <div class="content">
                <h1 class="success">Paypal Payment Result </h1>
                <?php if(!empty($PayerID)){ ?>
                    <div class="alert alert-success">Your Payment has been Successful</div>
                                                                
                    
                <?php }else{ ?>
                    <h1 class="alert alert-danger">Your Payment has Failed</h1>
                <?php } ?>

                  <a href="customer-cart.php"> <-- Back to Cart </a>
            </div>


        </div> <!--end of content div-->
       
       <?php include('footer.php');?>
    </div> <!--end of wrapper div-->
</body>
</html>