<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Category</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="cat_new_main"> 
	<form action="cat_add.php" method="post">
		
  <div class="cat_new_div">

	<div class="cat_new_div1">
	<h1>New Category</h1>
    </div>
	<br>

	<div class="cat_new_div2">
		<label for="name">Category Name:</label>
		<input class="cat_new_input" type="text" name="name" id="name">
	</div>	
		<br><br>

	<div class="cat_new_div2">	
		<label class="new_cat" for="remark">Remark:</label>
		<textarea class="cat_new_input1" name="remark" id="remark"></textarea>
	</div>

		<br><br>
	<div class="cat_new_div2">	
		<input class="new_cat_submit" type="submit" value="Add Category?">
	</div>
  </div>

	</form>
</div>
</body>
</html>