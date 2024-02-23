<?php
	include("confs/auth.php");
	include("confs/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>


 <div class="menu_div">
<div>
	<ul class="menu">
		<li><a class="li" href="welcomeadmin.php">Home</li>
			<li><a class="li" href="item_list.php">Manage Items</li>
				<li><a class="li" href="cat_list.php">Manage Categories</li>
					<li><a class="li" href="orders.php">Manage Orders</li>
						<li><a class="li" href="logout.php">LogOut</li>

</a>
	</ul>
</div>
</div>

<br><br>


  <div>
	  <img class="welcome_img" src="ph2.jpeg" height="450" width="700">
  </div>
<br><br>



  <div class="footer">
		&copy;<?php echo date("Y")?>. All right reserved. 
  </div>


</body>
</html>
