<?php
	include("confs/auth.php");
	include("confs/config.php");
	$result=mysqli_query($dbconn,"SELECT all_items. *,categories.name FROM all_items LEFT JOIN categories ON all_items.category_id=categories.id ORDER BY all_items.reached_date DESC");
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>

  <div class="menu_div">
	<ul class="menu">
	 <li><a class="li" href="welcomeadmin.php">Home</a></li>
	 <li><a class="li" href="item_list.php">Manage-Items</a></li>
	 <li><a class="li" href="cat_list.php">Manage-Categories</a></li>
	 <li><a class="li" href="orders.php">Manage-Orders</a></li>
	 <li><a class="li" href="logout.php">Logout</a></li>
	</ul>
  </div>


  <div class="item_list_head">
	<h1>Item List</h1>
	<a href="item_new.php" class="new">Add New Item??</a>
  </div>

   <div class="main">

	 <ul>
		<?php while($row=mysqli_fetch_assoc($result)){
			?>
		  <li class="item_list_show">

<div>

  <div class="list_show">
	 <img class="list_img" src="images/<?php echo $row['photo']?>" width="250" height="200">

		<div class="list"> 
				 <b><?php echo $row['title'] ?></b><br>
				 <i>by <?php echo $row['brand'] ?></i>
				 <br>
				 <?php echo $row['review']?> <small>(in <?php echo $row['name'] ?>)</small>
				 <br>
				 <span>Price:  $<?php echo $row['price']?></span>
				 <br><br>

			<div class="list_submit">	
				<a href="item_delete.php? id=<?php echo $row['id']?>" class="del" onClick="return confirm('Are You Sure?')">Del</a> 
				<a class="edit" href="item_edit.php? id=<?php echo $row['id']?>">Edit</a>
			</div>
		</div> 

  </div>  

</div>
			  <br>
			  	  	
		  </li>
		<?php } ?>

	 </ul>

   </div>
		
	
</body>
</html>