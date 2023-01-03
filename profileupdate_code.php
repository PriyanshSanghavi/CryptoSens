<?php
include("connect.php");
session_start();
$id = $_SESSION['id'];
$name = $_POST['name'];
$upi = $_POST['upi'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$q1="select * from user where email='$email' && id!='$id'";
$rs1=mysqli_query($cn,$q1);
$q2="select * from user where phone='$phone' && id!='$id'";
$rs2=mysqli_query($cn,$q2);
if($row1=mysqli_fetch_array($rs1))
{
		header("location:profile.php?msg=failedemail");

}
else if($row2=mysqli_fetch_array($rs2))
{
		header("location:profile.php?msg=failedcontact");
}
else
{
	$q2="update user set name='$name' ,email='$email' ,phone='$phone' ,upi='$upi' where id='$id'";
	$data=mysqli_query($cn,$q2);
	if($data)
	{
		header("location:profile.php?msg=success");
	}
	else
	{
		header("location:profile.php?msg=failed");
	}
}
?>