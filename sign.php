<html>

<head>
<title>Sign_in</title>
<link rel="stylesheet" type="text/css" href="css/fstyle.css">
</head>


<body>

	<div id="frm">
		<form action="ragistration.php" method="POST">
			<h2>Sign In</h2>
			<table>
			<tr>
			<p> 
				<td><label>User name:</label></td>
				<td><input type="text" id="txt" name="name" required ></td>
			</p>
			</tr>

			<tr>
			<p>
				<td><label>Create Password:</label></td>
				<td><input type="password" id="txt" name="pass"  required minlength="8" maxlength="20"></td>
			</p>
			</tr>
			
			<tr>
			<p>
				<td><label> Phone No:</label></td>
				<td><input type="tel" name="ph" id="txt"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}"  required></td>
			</p>
			</tr>
			
			<tr>
			<p>
				<td><label> Address:</label></td>
				<td><textarea id="txt"  width="20px" name="add" required></textarea> </td>
			</p>
			</tr>
			
			<tr>
			<p>
				<td><label> Email:</label></td>
				<td><input type="email" id="txt" name="email" value="Example@gmail.com" required></td>
			</p>
			</tr>
			
			
			
			
			<tr>
			<td>  </td>
			</tr>
			
			
			
			<tr>
			<p>
				<td></td>
				<td><input type="submit" id="btn" value="sign In" ></td>
				
			</p>
			
			</tr>
			
			</table>

			<label>Already have account </label><a href="log.php">LogIn</a>
		
		</form>
	</div>


</body>
</html>