<?php
include("connect.php");
session_start();
$coinname = $_POST['coin'];
$q="delete from coin where coinname='$coinname'";
	$data=mysqli_query($cn,$q);
	if($data)
	{		
		header("location:home.php?msg=rsuccess");
	}
	else
	{
		header("location:home.php?msg=rfailed");
	}
?>