<?php 
	include("confs/config.php");
	$id=$_GET['id'];
	$status=$_GET['status'];

	mysqli_query($dbconn,"UPDATE orders SET status=$status, received_date=now() WHERE id=$id");
	header("location: orders.php");
	?>

	
	