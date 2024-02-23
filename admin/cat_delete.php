<?php
	include("confs/config.php");
	$id=$_GET['id'];
	$sql="DELETE FROM categories WHERE id=$id";
	mysqli_query($dbconn,$sql);
	header("location:cat_list.php");
?>