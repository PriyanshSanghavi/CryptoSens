<?php
include("connect.php");
session_start();
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$q1="select * from user where email='$email' && phone='$phone'";
$rs1=mysqli_query($cn,$q1);
if($row1=mysqli_fetch_array($rs1))
{
	$id = $row1['id'];
	$q2="update user set password='$password' where id='$id'";
	$data=mysqli_query($cn,$q2);
	if($data)
	{
		session_start();
		session_unset();
		session_destroy();
		header("location:login.php");
	}
}
else
{
		header("location:updatepassword.php?msg=vfailed");
}
?>