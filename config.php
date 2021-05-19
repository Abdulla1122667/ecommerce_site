<?php 
// PayPal configuration 
 define('PAYPAL_ID', 'sydney.team2@gmail.com'); 
 define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
 define('PAYPAL_RETURN_URL', 'http://localhost/ecommerce/customer-success.php'); 
 define('PAYPAL_CANCEL_URL', 'http://localhost/ecommerce/customer-cancel.php'); 
 define('PAYPAL_NOTIFY_URL', 'http://localhost/ecommerce/customer-ipn.php'); 
 define('PAYPAL_CURRENCY', 'USD'); 

 // Database configuration 
 define('DB_HOST', 'localhost'); 
 define('DB_USERNAME', 'root'); 
 define('DB_PASSWORD', ''); 
 define('DB_NAME', 'ecommerce_db'); 

 // Change not required 
 define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");
?>