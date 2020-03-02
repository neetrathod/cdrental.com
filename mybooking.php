<?php



session_start();

include('include/header.php');


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');


$s=$_SESSION['user'];


$c="select * from booking where user='$s'";
$result=mysqli_query($con,$c);

$num=mysqli_num_rows($result);


?>
		
		<table class="tteb" bgcolor=black align="center" class="teb" cellpadding="10px" width="750px" >		
		<tr>
		
			<td width="200px" align="center"><?php echo "cd name"; ?></td>
			<td width="200px" align="center"><?php echo  "from"; ?></td>
			<td width="200px" align="center"><?php echo  "to"; ?></td>
			<td width="200px" align="center"><?php echo  "status"; ?></td>
			
		</tr>
		</table>
		
		
		<?php



if($num>0)
{
	while($fa=mysqli_fetch_array($result))
	{
		?>
		
		<table class="teb" align="center" cellpadding="10px"  width="750px" >
		
		
		
		<tr>
		
			
			<td width="200px" align="center"><?php echo  $fa['cd'];?></td>
			<td width="200px" align="center"><?php echo  $fa['from']; ?></td>
			<td width="200px" align="center"><?php echo  $fa['to']; ?></td>
			<td width="200px" align="center"><?php echo  $fa['status']; ?></td>
			
		</tr>
		</table>
		
		
		<?php
		
	}
}

?>


<html>
<head>

<style>

.teb
{
	font-size:30px;
	width:50%;
	border-radius:15px;
	margin-top:20px;
	background-color: rgba(100,100,100,0.4);
	
}

.tteb
{
	color:white;
	font-size:30px;
	width:50%;
	border-radius:15px;
	margin-top:20px;
	background-color: rgba(100,100,100,0.9);
}



</style>

</head>
<body>


</body>
</html>









