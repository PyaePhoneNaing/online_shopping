<?php
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="online_shopping";
	$dbconn= mysqli_connect($dbhost,$dbuser,$dbpass);
	mysqli_select_db($dbconn,$dbname);
?>