<?php


session_start();


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');

$title=$_POST['title'];
$price=$_POST['price'];
$ov=$_POST['overv'];



 
 $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
 	move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

 
 

if(isset($_SESSION['admn']))
{
	
	$cds="select * from cds where title='$title'";
	$run=mysqli_query($con,$cds);
	$num=mysqli_num_rows($run);


	if($num==1)
	{
		echo "<script>alert('change title'); </script>";
	}


	else
	{
	
		$in="INSERT INTO `cds`(`title`,`price`,`overview`,`image`) VALUES('$title','$price','$ov','.$name.')";
		mysqli_query($con,$in);		


		echo "<script>alert('CD added'); window.location='add.php'; </script>";
	
	}

}
else
{
	echo "<script>alert('You need to login first'); window.location='log.php'; </script>";
}
	
?>