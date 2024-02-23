<?php
	session_start();
	include("admin/confs/config.php");
	$cart=0;
	if(isset($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $qty){
			$cart +=$qty;
		}
	}

	//Browse by Category
	if(isset($_GET['cat'])){
		$cat_id=$_GET['cat'];
		$items=mysqli_query($dbconn,"SELECT * FROM all_items WHERE category_id=$cat_id");
	}

	else{
		$items=mysqli_query($dbconn,"SELECT * FROM all_items");
	}

	//Search result
	if(isset($_GET['q'])){
		$items=search_performs($_GET['q'],"items","title");
	}

	$cats=mysqli_query($dbconn,"SELECT * FROM categories");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Shop</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>



<body>


<div class="sidebar">
  <ul class="cats">
    <div class="topics">
	  <li>
	    <a class="amlog" href="admin/index.php">
			Admin Login
		</a>
	      </li>
    </div>
	
	<div class="kind">
	  <?php while($row=mysqli_fetch_assoc($cats)){ ?>
	  <li class="catname">
	    <a class="tplink" href="index.php?cat=<?php echo $row['id'];?>">
		  <?php echo $row['name'];?>
	    </a>
	  </li>
	<?php }?>
	
	<a class="AI" href="index.php">All Items</a>
	</div>

   
	<div class="cart">
		<i class="bi bi-cart4"><a class="cartno" href="view_cart.php">
	<?php echo $cart ?> </a></i>
    </div>
   
   </ul>
 </div>

	<br>


<div class="main">

	<ul class="items">
		<?php while($row=mysqli_fetch_assoc($items)):?>

		<li class="items_gp">
					
	       <?php !is_dir("admin/images/{$row['photo']}") and file_exists("admin/images/{$row['photo']}")?>

	         <div class="img">	
				
				<img src="admin/images/<?php echo $row['photo']?>" alt="" height="400" width="550">
			
		
	<div class="info">
		<div>		
			<div>
				<a href="item_detail.php?id=<?php echo $row['id']?>" class="item_name">
						<?php echo $row['title']?>
					</a>
			</div>

			<br>

			<div>
				<i class="price-tag">Price: $<?php echo $row['price']?></i>
			</div>		
		</div>	
			

			<div>
            <a href="add_to_cart.php?id=<?php echo $row['id']?>" class="add-to-cart">
					Add to >> <i class="bi bi-cart4"></i>
				</a>
			</div>
		</div>	
		</div>

			</li>

		<?php endwhile;?>

	</ul>

</div>



<div class="line">
    <h2>FIND US HERE</h2>
</div>


   <div class="conclude">
     <nav class="logo">
         <li class="logo_topic">NEWS DAILY</li>
         <dl class="logo_dl">Get news in your inbox each weekday morning </dl>
     </nav>

    <nav class="logo">
         <li class="logo_topic">NEWS APP</li>
         <dl class="logo_dl">Find out more on our apps</dl>
     </nav>

     <nav class="logo">
         <li class="logo_topic">EMAIL US AT </li>
         <dl class="logo_dl">pyaephonenaing674@gmail.com</dl>
     </nav>

</div>



<div class="footer">
	&copy;<?php echo date("Y")?>.All right reserved.
</div>

</body>
</html>