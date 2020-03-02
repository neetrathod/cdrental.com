<?php
session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'data');

$s=$_SESSION['admn'];

$c="select * from acc";
$result=mysqli_query($con,$c);

$num=mysqli_num_rows($result);


?>
		
		<table class="tteb"  bgcolor=black align="center" class="teb" cellpadding="10px" width="750px" >		
		<tr>
		
			<td width="400px" align="center"><?php echo "User"; ?></td>
			<td width="400px" align="center"><?php echo "Email"; ?></td>
			<td width="400px" align="center"><?php echo  "Phone no."; ?></td>
			<td width="400px" align="center"><?php echo  "Address"; ?></td>
			
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
		
			
			<td width="400px" align="center"><?php echo  $fa['name'];?></td>
			<td width="400px" align="center"><?php echo  $fa['email'];?></td>
			<td width="400px" align="center"><?php echo  $fa['phno']; ?></td>
			<td width="400px" align="center"><?php echo  $fa['add']; ?></td>
			
		</tr>
		</table>
		
		
		<?php
		
	}
}

else
{
	echo "<script>alert('no data'); </script>";

}

?>


<html>
<head>

<style>

.teb
{
	font-size:20px;
	width:90%;
	border-radius:15px;
	margin-top:20px;
	background-color: rgba(100,100,100,0.4);
	
}

.tteb
{
	color:white;
	font-size:20px;
	width:90%;
	border-radius:15px;
	margin-top:20px;
	background-color: rgba(100,100,100,0.9);
}



</style>

</head>
<body>


</body>
</html>









