




<?php


session_start();


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');

$cd=$_POST['cdname'];
$from=$_POST['from'];
$to=$_POST['to'];
$s=$_SESSION['user'];


if(isset($_SESSION['user']))
{
	
	$cds="select * from cds where title='$cd'";
	$run=mysqli_query($con,$cds);
	$num=mysqli_num_rows($run);

	if($num==1)
	{
		$in="INSERT INTO `booking`(`user`,`cd`,`from`,`to`) VALUES('$s','$cd','$from','$to')";
		mysqli_query($con,$in);
		echo "<script>alert('Booking successfull'); window.location='home.php'; </script>";
	}


	else
	{
		echo "<script>alert('We have not this CD'); window.location='home.php'; </script>";
	}

}
else
{
	echo "<script>alert('You need to login first'); window.location='log.php'; </script>";
}
	
?>