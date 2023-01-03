<?php
include("connect.php");
session_start();
$id= $_SESSION['id'];
$q="update wallet set balance='0' where userid='$id'";
$data=mysqli_query($cn,$q);
if($data)
{
	header("location:wallet.php?msg=wsuccess");
}
else
{
		header("location:wallet.php?msg=wfailed");
}
?>