<?php

session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');


$ph=$_POST['ph'];
$email=$_POST['email'];


$cd="select * from contactus where id='1'";
$result=mysqli_query($con,$cd);
$num=mysqli_num_rows($result);


$n="SELECT `password` FROM `admin` WHERE `admin`='$s'";
$ru=mysqli_query($con,$n);
$ro=mysqli_fetch_array($ru);
$fatchpas=$ro['password'];


		$update="UPDATE `contactus` SET `ph`='$ph',`email`='$email' WHERE `id`=1";
		mysqli_query($con,$update);
		
		echo "<script> alert('Successfuly update !!!'); window.location='updatecontactus.php';</script>";



?>
		
		
