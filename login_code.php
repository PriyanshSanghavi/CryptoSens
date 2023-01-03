<?php
include("connect.php");
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$q="select * from user where email='$email' and password='$password'";
$rs=mysqli_query($cn,$q);
if($row=mysqli_fetch_array($rs))
{
	$_SESSION['id']=$row['id'];
	header("location:index.php");
}
else
{
	header("location:login.php?msg=fail");
}
?>