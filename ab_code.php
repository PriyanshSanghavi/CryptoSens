<?php
include("connect.php");
session_start();
$b = $_POST['balance'];
$id= $_SESSION['id'];
$q="select * from wallet where userid='$id'";
$rs=mysqli_query($cn,$q);
	if($row=mysqli_fetch_array($rs))
	{
		$balance=$row['balance'] + $b;
		$q1="update wallet set balance='$balance' where userid='$id'";
		$data=mysqli_query($cn,$q1);
		if($data)
		{
			header("location:wallet.php?msg=success");
		}
	}
	else
	{
			header("location:wallet.php?msg=failed");
	}
?>