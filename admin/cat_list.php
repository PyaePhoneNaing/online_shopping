<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


<div class="cat_list_main">

	<h1 class="cat_list_head">Category List</h1>

	<div class="cat_list_div">
	<?php
		include("confs/config.php");
		$result=mysqli_query($dbconn,"SELECT * FROM categories");
		?>
	
    
		<ul class="cat_list_ul">
			
		<?php while ($row=mysqli_fetch_assoc($result)) {?>
			


			<li title="<?php echo $row['remark']?>">

				<br>

		<div class="cat_list_div2">	
				
		    <div>	
				<?php echo $row['name']?>
			</div>	

			<div>
				<a href="cat_delete.php?id=<?php echo $row['id']?>" class="cat_list_delete" onClick="return confirm('Are You Sure?')">Del</a>



				<a href="cat_edit.php? id=<?php echo $row['id']?>" class="cat_list_edit">Edit</a>
			</div>	

		</div>

			</li>



		<?php }?>
		<br>	
		<a href="cat_new.php" class="cat_list_new"> Create New Category? </a>
</ul>
    
</div>

</div>

		
</body>
</html>