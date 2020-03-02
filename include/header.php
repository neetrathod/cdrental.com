
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="ic.ico" />
<title>C.D. Rental</title>


<style>


.user
{
	color:white;
	font-family:Fantasy;
	margin-left:401px;
}

.log
{
	font-family:Fantasy;
	background-color:skyblue;
	padding:6px;
	color:white;
	border-radius:4px;
	text-decoration: none;
}
.log:hover
{
	color:blue;
}


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
	background-color:black;
	height:55;
	padding-top:15px;
}



.link
{
	padding:5px;
	margin-left:60px;
}

.fon
{
	font-family:Stencil Std, fantasy;
	
	
}

.link:link 
{
  text-decoration: none;
  color:white;
}



.link:hover 
{
  color:skyblue;
}

.ink:link 
{
  text-decoration: none;
  color:white;
}

.ink:hover 
{
  color:skyblue;
}

.link,.ink:visited
{
	color:skyblue;
}


#more 
{
  padding: 5px;
  text-align: center;
  background-color: black;
  border: solid 1px skyblue;
  display: none;
  width:200px;
  margin-left:500;
	border-radius:50px;
	font-family:fantasy;
  
}




</style>

<script src="jquery-3.2.1.js"></script>
<script>

$(document).ready(function(){
	
  $("#m").click(function(){
    $("#more").slideToggle("slow");
  });
});

</script>


</head>

<body>

<?php
if(isset($_SESSION['user']))
{
	?>
	<font class="fon">

	<div class="head">

	<a class="link"  href="home.php">HOME</a>	
	<a class="link" href="about_us.php">ABOUT US</a>
	<a class="link" href="cd_list.php">CD LIST</a>
	<a class="link" href="contact_us.php">CONTACR US</a></font>
	<font align="right" class="user"> <image src="css/images/user.png" id="m" height="25px" width="25px"  /> &nbsp;&nbsp; <?php echo $_SESSION['user'];?> </font>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="logout.php" class="log" align="right" >LOGOUT</a>
	
	
	</div>
	
	<center><div id="more" >   
		<a href="setprofile.php" class="ink"> PROFILE SETTING </a><br/>
		<a href="changepas.php" class="ink"> UPDATE PASSWORD </a><br/>
		<a href="mybooking.php" class="ink"> MY BOOKING </a><br/>

	</div></center>
	
	
	<?php
}
?>

<?php
if(!isset($_SESSION['user']))
{
	?>
	<font class="fon">

	<div class="head">

	<a class="link"  href="home.php">HOME</a>	
	<a class="link" href="about_us.php">ABOUT US</a>
	<a class="link" href="cd_list.php">CD LIST</a>
	<a class="link" href="contact_us.php">CONTACR US</a></font>
	<font align="right" class="user"> <image src="css/images/user.png" height="25px" width="25px"  /> &nbsp;&nbsp;  </font>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="log.php" class="log"  align="right" >LOGIN/RAGISTER</a> 
	</div>
	
	
	<?php

	
}
	?>









</body>
</html>
