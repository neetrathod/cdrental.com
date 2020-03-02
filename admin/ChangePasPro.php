<?php

session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');


$s=$_SESSION['admn'];
$cpas=$_POST['cpas'];
$npas=$_POST['npas'];




$cd="select * from admin where admin='$s'";
$result=mysqli_query($con,$cd);
$num=mysqli_num_rows($result);


$n="SELECT `password` FROM `admin` WHERE `admin`='$s'";
$ru=mysqli_query($con,$n);
$ro=mysqli_fetch_array($ru);
$fatchpas=$ro['password'];

if($num==1)
{
	if($cpas==$fatchpas)
	{
		$update="UPDATE `admin` SET `password`='$npas' WHERE admin='$s' ";
		mysqli_query($con,$update);
		
		header(location:../home;);
		
		echo "<script> alert('Your password has been changed!!!'); window.location='changepas.php';</script>";

	}
		
	else
	{
		echo "<script> alert('Current password is wrong!!!'); window.location='changepas.php';</script>";
	}
	
}







?>
		
		
