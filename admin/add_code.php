<?php
include("connect.php");
session_start();
$coinname = $_POST['name'];
$coinid = $_POST['id'];
$q="insert into coin (coinname,coinid) values ('$coinname','$coinid')";
	$data=mysqli_query($cn,$q);
	if($data)
	{		
		header("location:home.php?msg=success");
	}
	else
	{
		header("location:home.php?msg=failed");
	}
?>