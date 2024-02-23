<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Item Detail</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>


<body class="detail_body">
	
	<?php
		include("admin/confs/config.php");
		$id=$_GET['id'];
		$item=mysqli_query($dbconn,"SELECT * FROM all_items WHERE id=$id");
		$row=mysqli_fetch_assoc($item);
		?>

		<div class="detail">
		  <div class="detail">
		  	<div class="img">
			 <img src="admin/images/<?php echo $row['photo']?>" width="600" height="400">
			</div> 
			 
		   <div class="detail_review">
			 <h2><?php echo $row['title']?></h2>
			 <i>by <?php echo $row['brand']?></i>,
			 <b>$<?php echo $row['price']?></b>
			 <p><?php echo $row['review']?></p>
			 <a href="add_to_cart.php?id=<?php echo $id ?>" class="add-to-cart2">Add to Cart</a><br><br>
			 <a href="index.php" class="add-to-cart2">&laquo; Back</a>
		   </div>
		  </div>
		</div>

		<div class="footer">
			&copy; <?php echo date("Y") ?>.All Right reserved.
		</div>

</body>
</html>