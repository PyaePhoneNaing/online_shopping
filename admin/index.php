<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="div1">
	<h1>Login to Online Shop Administration</h1>
	<?php if(isset($_GET['login']) and $_GET['login']=="failed"):?>
		<div class="error">Login Failed! User name or password incorrect.</div>
	<?php endif;?>
</div>


<div class="form1">
	<div class="form">
	<form action="login.php" method="post">
		<label for="name">Name</label>
		<input type="text" id="name" name="name" placeholder=" Type Name:"><br><br>

		<label for="password">Password</label>
		<input type="password" id="password" name="password" placeholder=" Type Password:">
		<br><br>
		<input type="submit" value="Admin Login">
	</form>
    </div>
</div>
</body>
</html>