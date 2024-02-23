<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Item Detail</title>
</head>
<body>
	<h1>Item Detail</h1>
	<?php
	include("confs/config.php");
	$id=$_GET['id'];
	$item=mysqli_query($dbconn,"SELECT * FROM all_items WHERE id=$id");
	$row=mysqli_fetch_assoc($item);
	?>

	<div class="detail">
		<a href="orders.php" class="back">&laquo; Go Back</a>
		<img width="300" height="300" src="images/<?php echo $row['photo']?>">
		<h2><?php echo $row['title']?></h2>
		<i>by <?php echo $row['brand']?></i>,
		<b>$<?php echo $row['price']?></b>
		<p><?php echo $row['review']?></p>

	</div>

	<div class="footer">
		&copy; <?php echo date("Y") ?>.All right reserved.
	</div>

</body>
</html>