<?php
session_start();
include("admin/confs/config.php");
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$visa=$_POST['visa'];
$address=$_POST['address'];
$received=date('Y-m-d H:m:s', strtotime('+7days',strtotime('now')));
mysqli_query($dbconn,"INSERT INTO orders(name,email,phone,visa_card,address,status,ordered_date,received_date) VALUES('$name','$email','$phone','$visa','$address',0,now(),'$received')");
	$order_id=mysqli_insert_id($dbconn);
	foreach($_SESSION['cart']as $id=>$qty){
		mysqli_query($dbconn,"INSERT INTO order_items(item_id,order_id,qty) VALUES($id,$order_id,$qty)");
	}
	unset($_SESSION['cart']);
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Submitted Order</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body>
	
	<div class="order_confirm">	
	  <div>
		<h1 class="confirm_reply">Thank you.</h1>
		<p class="confirm_reply">Your order was completed successfully. </p>
		<p class="confirm_reply"> An email confirmation will be sent shortly. </p>
	  </div>
	

		<div class="footer">
			&copy;<?php echo date('Y');?>.All Right Reserved.
		</div>
	</div>
		
	</body>
	</html>