<?php
    session_start();
    //$_SESSION['loginErrorMessage'] = "";
     $_SESSION['loginErrorMessage'] ="<div class='alert alert-danger'>You have not login, Please login to proceed...</div>";
     $_SESSION['customerLoginErrorMessage'] ="<div class='alert alert-danger'>You have not login, Please login to proceed...</div>";
	include('database.php');
?>

<html>
<head>
	<title>Home Comfort</title>
    <link href="style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>

<body>
	<div class="wrapper">
    	<div class="header">
        	<div class="header-logo">
				<a href="index.php"><img height="100%" src="images/logo.png" /></a>
            </div>
            <div class="header-image">
            	
                <img src="images/store.jpg" alt="image not found" />
            </div>
            
    	</div>