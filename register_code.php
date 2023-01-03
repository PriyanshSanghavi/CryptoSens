<?php
include("connect.php");
$name = $_POST['name'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$upi = $_POST['upi'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$q1="select * from user where email='$email'";
$rs1=mysqli_query($cn,$q1);
$q2="select * from user where phone='$phone'";
$rs2=mysqli_query($cn,$q2);
if($row1=mysqli_fetch_array($rs1))
{
		header("location:register.php?msg=failedemail");

}
else if($row2=mysqli_fetch_array($rs2))
{
		header("location:register.php?msg=failedcontact");
}
else if($password != $cpassword)
{
		header("location:register.php?msg=failedcpassword");
}
else
{
	$q2="insert into user (name,email,phone,upi,password) values ('$name','$email','$phone','$upi','$password')";
	$data=mysqli_query($cn,$q2);
	$q3="select * from user where email='$email' && phone='$phone'";
	$rs=mysqli_query($cn,$q3);
	if($row3=mysqli_fetch_array($rs))
	{
		$id=$row3['id'];
		$q4="insert into wallet (userid,balance) values ('$id','0')";
		if(mysqli_query($cn,$q4))
		{
			header("location:login.php");
		}
	}
	else
	{
		header("location:register.php?msg=failed");
	}
}
?>