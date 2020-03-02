
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
	width:40%;
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

	<div id="frm">
		<form action="addpro.php" method="POST">
			<h2>Add Product</h2>
			
			<table height="90px">
			<tr>
			<p> 
				<td><label>Title:</label></td>
				<td><input type="text" id="txt"  name="title" required></td>
			</p>
			</tr>

			<tr>
			<p>
				<td><label>Price:</label></td>
				<td><input type="number" id="txt" name="price" required ></td>
			</p>
			</tr>
			
			<tr>
			<p>
				<td><label>Over view:</label></td>
				<td><textarea id="txt" name="overv" required> </textarea></td>
			</p>
			</tr>
			
			<tr>
			<p>
				<td><label>Add image:</label></td>
				<td><input type="file" id="txt" name="file" required   ></td>
			</p>
			</tr>
			
			
			<tr>
			<p>
				<td></td>
				<td><input type="submit" id="btn"  value="Add"></td>
				
			</p>
			
			</tr>
			
			</table>
			
			
		</form>
	</div>
</body>
</html>

