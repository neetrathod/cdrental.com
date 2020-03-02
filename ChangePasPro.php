<?php

session_start();

include('include/header.php');


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');


$s=$_SESSION['user'];
$cpas=$_POST['cpas'];
$npas=$_POST['npas'];


$cd="select * from acc where name='$s'";
$result=mysqli_query($con,$cd);
$num=mysqli_num_rows($result);


$n="SELECT `password` FROM `acc` WHERE `name`='$s'";
$ru=mysqli_query($con,$n);
$ro=mysqli_fetch_array($ru);
$fatchpas=$ro['password'];

if($num==1)
{
	if($cpas==$fatchpas)
	{
		$update="UPDATE `acc` SET `password`='$npas' WHERE name='$s' ";
		mysqli_query($con,$update);
		session_destroy();
		echo "<script> alert('Your password has been changed!!!'); window.location='log.php';</script>";

	}
		
	else
	{
		echo "<script> alert('Current password is wrong!!!'); window.location='changepas.php';</script>";
	}
	
}


?>
		
		
