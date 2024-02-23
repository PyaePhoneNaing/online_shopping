<?php
	session_start();
	if(!isset($_SESSION['cart'])){
		header("location:index.php");
		exit();
	}

	include("admin/confs/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

   
	<div class="cart_list"> 
	 <h1>Shopping Cart</h1>
	  <div class="tb">
		<table class="rtb">
		  <tr>
		    <th class="tb_list">Item Name</th>
			<th class="tb_list">Quantity</th>
			<th class="tb_list">Unit Price</th>
			<th class="tb_list">Price</th>
		  </tr> 

		  <?php
			$total=0;
			foreach ($_SESSION['cart'] as $id => $qty) {
			$result=mysqli_query($dbconn,"SELECT title,price FROM all_items WHERE id=$id");
			$row=mysqli_fetch_assoc($result);
			$total +=$row['price']*$qty;
		  ?>

		  <tr>
			<td class="tb_list"><?php echo $row['title'];?></td>
			<td class="tb_list"><?php echo $qty; ?></td>
			<td class="tb_list">$<?php echo $row['price'];?></td>
			<td class="tb_list">$<?php echo $row['price']*$qty;?></td>
		  </tr>
			<?php } ?>
		  <tr>
			<td class="tb_list" colspan="3" align="right"><b>Total:</b></td>
			<td class="tb_list">$<?php echo $total;?></td>
		  </tr>
	    </table>
	</div>

	<div>
		<ul class="button_cart">
		  <li><a class="button_cart_li" href="index.php">&laquo; Back to Shopping</a></li>
		  <br>
		  <li><a class="button_cart_clear" href="clear_cart.php">&times; Clear Cart</a></li>
		</ul>
	</div>	

</div>

		
		
		<div class="submit_list">
			<h2 style="color: #3a5a40;">Make a Reservation</h2>
			<form class="submit_form" action="submit_order.php" method="post">
				
			<div> 
				<label class="label_div" for="name">Your Name:</label>
				<input class="label_input" type="text" name="name" id="name" required>
			
	
				<label class="label_div" for="email">Email:</label>
				<input class="label_input" type="text" name="email" id="email" required><br><br>
			</div>
			

			<div>	
				<label class="label_div" for="phone">Phone:</label>
				<input class="label_input" type="text" name="phone" id="phone" required>


				<label class="label_div" for="visa">Visa Card:</label>
				<input class="label_input" type="text" name="visa" id="visa"><br><br>
			</div>
			

			<div>	
				<label class="label_div" for="address">Address:</label>
				<textarea class="label_add" name="address" id="address"></textarea>
				<br><br>
			</div>
			

			<div style="margin-left:-180px;">
			  <ul>	
				<li class="submit_click"><input class="submit_click_li" type="submit" value="Submit Order"></li><br>

				<li class="submit_click"><a class="submit_click_li" href="index.php">Continue Shopping</a></li>
              </ul>			
			</div>	


			</form>
</div>


<div class="footer">
	&copy; <?php echo date("Y"); ?>. All right reserved.
</div>
</body>
</html>