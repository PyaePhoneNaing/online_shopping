<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	include("confs/config.php");
	$id =$_GET['id'];
	$result =mysqli_query($dbconn,"SELECT * FROM categories WHERE id=$id");
	$row = mysqli_fetch_assoc($result);
?>

<div class="cat_edit_main">

    <form action="cat_update.php" method="post">
   <div class="cat_edit_div"> 	
	 

   <div>   
	   <input type="hidden" name="id" value="<?php echo $row['id']?>"> 
	<div class="cat_edit_div1">
	 <h1>Edit Category</h1>
	</div>
	 <br>  

	<div class="cat_edit_div2">
	<label for="name">Category Name: </label> 
	<input class="cat_edit_input" type="text" name="name" id="name" value="<?php echo $row['name']?>">
    </div>
	<br><br>

	<div class="cat_edit_div2">
	<label for="remark">Remark:</label>
	<textarea class="cat_edit_input1" name="remark" id="remark"><?php echo $row['remark']?></textarea>
    </div>
	<br><br>

	<div class="cat_edit_div2">
	<input type="submit" value="Update Category">
    </div>
    
    </div>
   </div>
    </form>
</div>

</body>
</html>
