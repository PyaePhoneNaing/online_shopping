<?php
	include("confs/auth.php");
	include("confs/config.php");
	$orders_data=mysqli_query($dbconn,"SELECT * FROM orders");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="menu_div">
  <div>
	<ul class="menu">
		<li><a class="li" href="welcomeadmin.php">Home</a></li>
		<li><a class="li" href="item_list.php">Manage Items</a></li>
		<li><a class="li" href="cat_list.php">Manage Categories</a></li>
		<li><a class="li" href="orders.php">Manage Orders</a></li>
		<li><a class="li" href="logout.php">Logout</a></li>
	</ul>
  <div>	
</div>

	<h1>Order List</h1>


	<ul class="orders">
		<?php while($orders=mysqli_fetch_assoc($orders_data)){
			if($orders['status']){
				?>
				<li class="delivered">
					<?php } else {?>
				</li>
			<?php } ?>

			<div class="order">

				<div style="margin: 10px;">

				<div class="order_title">
				<b> Name: <?php echo $orders['name'];?></b><br>
				<i style="margin-left:30px;"> Mail: <?php echo $orders['email'];?></i><br>
			  </div>

			  <div class="order_title">
				<span>Phone: <?php echo $orders['phone'];?></span><br>
				<i style="margin-left:30px;">Visa: <?php echo $orders['visa_card'];?></i><br>
			  </div>

			  <div class="order_title">
				<p>Address: <?php echo $orders['address'];?></p>
			  </div>

			  <div>
				<p>Date: <?php echo $orders['received_date'];?></p>
			  </div>
			    

				<?php if($orders['status']){ ?>
					*<a href="order_status.php?id=<?php echo $orders['id'] ?>&status=0">Undo</a>
				<?php } else{ ?>
					*<a href="order_status.php?id=<?php echo $orders['id'] ?>&status=1">Mark as Delivered</a>
					<br>
				<?php } ?>
			


			<br>

			<div class="items">
				<?php
				$order_id=$orders['id'];
				$order_item=mysqli_query($dbconn,"SELECT order_items.*,all_items.title FROM order_items LEFT JOIN all_items ON order_items.item_id = all_items.id WHERE order_items.order_id = $order_id") or die(mysqli_error());
				while($items=mysqli_fetch_assoc($order_item)){
					?>
					<b>
						<a href="adminitem_detail.php?id=<?php echo $items['item_id'];?>">
							<?php echo $items['title']; ?>
						</a>
						(<?php echo $items['qty']; ?>)
					</b>
				<?php } ?>
			</div>
			</div>
			</div>

			<br>
		</li>
	<?php } ?>
</li>

	</ul>
</div>

</body>
</html>