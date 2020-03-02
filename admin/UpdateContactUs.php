<?php
session_start();
?>

<html>
<head>

<style>


#btn
{
	
	font-size:15px;
	border-width:0px;
	border-bottom-width:2.5px;
	border-bottom-color: #337ab7;
	border-radius:15px;
	color: #fff;
	background:blue;
	padding: 5px;
	margin-left:64%;
	width:35%;
	
}

#btn:hover
{
	background: #337ab7;
}

#txt
{
	font-size:15px;	
	border-width:0px;
	border-bottom-width:2.5px;
	border-bottom-color:black;
	color: black;
	background:  ;
	border-radius:15px;
	width:190;
	padding: 5px;
}



label
{
		font-size:25px;
}

form
{
	font-size:18px;
	width:30%;
	border-radius:15px;
	margin : 100px auto;
	padding: 50px;
	background-color: rgba(100,100,100,0.9);
	border-bottom-width:0;
	border-bottom-color:none;
	
}



</style>

</head>
<body>

<form action="updatecontactuspro.php"  method="POST">
			
			<table>
			<h2>UPDATE CONTACT US</h2>
			</tr>
			<tr>
			 
				<td><label>Phone no.:</label></td>
				<td><input type="tel" id="txt" name="ph" required ></td>
			
			</tr>

			<tr>
			 
				<td><label>email:</label></td>
				<td><input type="email" id="txt" name="email" required ></td>
			
			</tr>
			
			<tr>
			
				<td></td>
				<td><input type="submit" id="btn" value="Update" ></td>
			
			</tr>
			</table>
		</form>





</body>
</html>









