<?php
include("confs/config.php");
$id=$_POST['id'];
$name=$_POST['name'];
$remark=$_POST['remark'];
$sql="UPDATE categories SET name='$name',remark='$remark',modified_date=now()WHERE id=$id";
mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn));
header("location: cat_list.php");