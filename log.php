<html>

<head>
<title>Log_in</title>
<link rel="stylesheet" type="text/css" href="css/fstyle.css">
</head>


<body>

	<div id="frm">
		<form action="validation.php" method="POST">
			<h2>LogIn</h2>
			<table>
			<tr>
			<p> 
				<td><label>User id:</label></td>
				<td><input type="text" id="txt" required name="name"></td>
			</p>
			</tr>

			<tr>
			<p>
				<td><label>Password:</label></td>
				<td><input type="password" id="txt" name="pass" required maxlength="20" minlength="8" ></td>
			</p>
			</tr>
			
			<tr>
			<td>  </td>
			</tr>
			
			<tr>
			<p>
				<td></td>
				<td><input type="submit" id="btn"  value="Login"></td>
				
			</p>
			
			</tr>
			
			</table>
			
			<label>Create your account </label><a href="sign.php">here</a><br/>
			<label>Get your </label><a href="forgot.php">Forgotten password</a>
			
			
			
		</form>
	</div>


</body>
</html>




