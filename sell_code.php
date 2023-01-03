<?php
include("connect.php");
session_start();
$id = $_SESSION['id'];
$coinname = $_POST['coinname'];
$q="delete from coinwallet where coinname = '$coinname'";
	$rs=mysqli_query($cn,$q);
	if($rs)
	{
		header("location:buysell.php?msg=ssuccess");
	}
	else
	{
		header("location:buysell.php?msg=sfailed");
	}
?>