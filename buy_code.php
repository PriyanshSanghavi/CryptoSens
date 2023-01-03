<?php
include("connect.php");
session_start();
$id = $_SESSION['id'];
$uid = 0;
$coinname = $_POST['coinname'];
$balance = $_POST['balance'];
$q= "select * from coinwallet where userid='$id' && coinname='$coinname'";
$rs=mysqli_query($cn,$q);
if($row=mysqli_fetch_array($rs))
{
	$uid = $row['id'];
}
if($uid != 0)
{
	while($row=mysqli_fetch_array($rs))
	{
		$balance = $balance + $row['balance'];
	}
	$q1="update coinwallet set balance='$balance' where coinname='$coinname' && userid='$id'";
	$data=mysqli_query($cn,$q1);
	if($data)
	{
		header("location:buysell.php?msg=bsuccess");
	}
	else
	{
		header("location:buysell.php?msg=bfailed");
	}
}
else
{
	$q="insert into coinwallet (userid,coinname,balance) values ('$id','$coinname','$balance')";
	$rs=mysqli_query($cn,$q);
	if($rs)
	{
		header("location:buysell.php?msg=bsuccess");
	}
	else
	{
		header("location:buysell.php?msg=bfailed");
	}
}
?>