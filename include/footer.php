<?php


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');

$cu="select * from contactus where id='1'";
$result=mysqli_query($con,$cu);

$ro=mysqli_fetch_array($result);
$fatchph=$ro['ph'];
$fatchemail=$ro['email'];


?>


<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="ic.ico" />
<title>C.D. Rental</title>


<style>




 body 
{
	
	 width: 100%;
     height: 100%;
     margin: 0;
     padding: 0;
	background-size:cover;
}

.footer
{
	background-color:rgba(0,0,0,0.8);
	height:50;
	padding-top:15px;
	
}

.admin
{
	font-family:hevetica;
	font-size:20px;
}

.admin:link 
{
  text-decoration: none;
  color:white;
  width:50%;
}





.admin:visited
{
	color:white;
}

.admin:hover 
{
  color:skyblue;
}

.phno
{
	text-decoration: none;
	color:white;
	font-family:hevetica;
	font-size:20px;
	margin-left:100px;
}


</style>



</head>

<body>


	
	

	<div class="footer" align="center">

		<a class="admin"  href="admin/adminlog.php">> Admin login</a>	
	
        <span class="phno">
        > Service Helpline Call Us: 
       <b> <a href=<?php echo "tel:$fatchph" ?> class="admin"> <?php echo "$fatchph" ?> </a></span></b>
		
		<span class="phno">> For Support Mail us :
        <b><a href=<?php echo "mailto:$fatchemail" ?> class="admin"> <?php echo "$fatchemail" ?>  </a> </span>
	</b>
	</div>
	
	



</body>
</html>
