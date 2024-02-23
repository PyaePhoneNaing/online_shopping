<?php
		include("confs/config.php");
		$id=$_GET['id'];
		$result=mysqli_query($dbconn,"SELECT * FROM all_items WHERE id=$id");
		$row=mysqli_fetch_assoc($result);
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit Item</title>
	</head>
	<body>
		<h1>Edit Item</h1>

		<form action="item_update.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $row['id'];?>">

			<label for="title">Item Name</label>
			<input type="text" name="title" id="title" value="<?php echo $row['title']?>">

		    <label for="brand">Brand</label>
			<input type="text" name="brand" id="brand" value="<?php echo $row['brand']?>">

			<label for="review">Review</label>
			<textarea name="review" id="review"><?php echo $row['review']?></textarea>

			<label for="price">Price</label>
			<input type="text" name="price" id="price" value="<?php echo $row{'price'}?>">

			<label for="categories">Category</label>
			<select name="category_id" id="categories">
				<option value="0">-- Choose --</option>
				<?php
					$categories=mysqli_query($dbconn,"SELECT id,name FROM categories");
					while($cat=mysqli_fetch_assoc($categories)){
						?>
						<option value="<?php echo $cat['id']?>">
							<?php echo $cat['name'];?>
							<?php if($cat['id']==$row['category_id']) echo "selected" ?>
						</option>
					<?php } ?>
			</select>
			<br><br>

			<img src="images/<?php echo $row['photo']?>" alt="" height="150">
			<label for="photo">Change images</label>
			<input type="file" name="photo" id="photo">
			<br><br>

			<input type="submit" value="Update Item">
			<a href="item_list.php" class="back"> Back>> </a>




		</form>
	</body>
	</html>