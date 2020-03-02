




<?php
if(isset($_SESSION['admn']))
{
	?>
	<?php
		session_destroy();
	?>
	<?php
}
?>

<?php

if(!isset($_SESSION['admn']))
{
	
}
?>






<html>

<head>
<title>Login_Admin</title>
<link rel="stylesheet" type="text/css" href="../css/fstyle.css">
</head>


<body>

	<div id="frm">
		<form action="validation.php" method="POST">
			<h2>LogIn For Admin</h2>
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
				<td><input type="password" id="txt" name="pass" required maxlength="20"  ></td>
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
			
			
			
			
		</form>
	</div>


</body>
</html>




