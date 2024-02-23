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

	<h1 class="cat_list_head">New Item</h1>
	<div class="cat_list_div">
	<form action="item_add.php" method="post" enctype="multipart/form-data">

		<label for="title">Item News</label>
		<input type="text" name="title" id="title">
		<br><br>

		<label for="brand">Brand</label>
		<input type="text" name="brand" id="brand">
		<br><br>

		<label for="review">Review</label>
		<textarea class="back" name="review" id="review"></textarea>
		<br><br>

		<label for="price">Price</label>
		<input type="text" name="price" id="price">
		<br><br>

		<label for="categories">Category</label>
		<select name="category_id" id="categories">
			<option value="1">--Choose--</option>
			<?php
			include("confs/config.php");
			$result=mysqli_query($dbconn,"SELECT id,name FROM categories");
			while ($row=mysqli_fetch_assoc($result)) {
			?>
			<option value="<?php echo $row['id']?>">
				<?php echo $row['name'];?>
			</option>

		<?php } ?>
		</select>
		<br><br>

		<label for="photo">Image</label>
		<input type="file" name="photo" id="photo">

		<br><br>
		<input type="submit" value="ADD Item">
		<a href="item_list.php" class="back">Back</a>
	</form>
</div>
</div>
</div>

</body>
</html>