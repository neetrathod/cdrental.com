<?php

session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');

$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$ph=$_POST['ph'];
$add=$_POST['add'];



$c="select * from acc where name='$name' or email='$email' ";
$result=mysqli_query($con,$c);
$num=mysqli_num_rows($result);
if($name==null || $pass==null || $email==null || $email=="Example@gmail.com")
{
	
	echo "<script>alert('Please enter valid value. Try again.');
	window.location='sign.php';
	</script>";
}
	
	


else
{
	
		$qy="INSERT INTO `acc` (`name`, `password`, `email`, `phno`, `add`) VALUES ('$name', '$pass', '$email', '$ph', '$add');";
		mysqli_query($con,$qy);
	
		header('location:log.php');
		
	
}	
?>