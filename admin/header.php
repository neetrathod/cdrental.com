<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="ic.ico" />
<title>Admin</title>
<style>




 body 
{
	
	 width: 100%;
     height: 100%;
     margin: 0;
     padding: 0;
	background-size:cover;
}

.head
{
	background-color:rgba(11,44,99,0.9);
	height:55;
	padding-top:20px;
	
}

.fon
{
	margin-left:20px;
	color:white;
	font-size:25px;
}

.log
{
	font-family:Fantasy;
	background-color:skyblue;
	padding:6px;
	color:white;
	border-radius:4px;
	text-decoration: none;
	margin-left:900px;
}
.log:hover
{
	color:darkblue;
}


</style>

</head>

<body>




<?php
if(isset($_SESSION['admn']))
{
	
	header('location:../home.php');
	
	
}
?>

<?php

if(!isset($_SESSION['admn']))
{
	?>
		<div class="head">
	<form>
	<label class="fon">| CD RENTAL ADMIN PANEL</label>
	
	 <a href="logout.php" class="log"  align="right"  > LOGOUT</a>
	
	</div>
	<form>
	
	<?php
}
	?>


</body>
</html>
