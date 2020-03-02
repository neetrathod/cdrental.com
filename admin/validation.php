<?php

session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');

$admin=$_POST['name'];
$pass=$_POST['pass'];

$c="select * from admin where admin='$admin' && password='$pass'";
$result=mysqli_query($con,$c);
$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['admn']=$admin;
	header('location:adminhome.php');

}

else
{

	echo "<script>alert('wrong id and password'); window.location='../home.php'; </script>";
	
	
}
	
?>
