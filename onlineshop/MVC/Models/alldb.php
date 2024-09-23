<?php
require_once('db.php');
  
function auth($id,$pass)
{
	$conn=con();
	$sql="select * from seller where Id='$id' and Pass='$pass'";
	$res=mysqli_query($conn,$sql);
	return $res;
}
function data()
{
	$conn=con();
	$sql1="select * from seller";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}