<?php

session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');

$name=$_POST['name'];
$pass=$_POST['pass'];

$c="select * from acc where name='$name' && password='$pass'";
$result=mysqli_query($con,$c);
$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['user']=$name;
	header('location:home.php');

}

else
{

	echo "<script>alert('Your data isnt found please try it again or do SignIn'); window.location='log.php'; </script>";
	
	
}
	
?>
