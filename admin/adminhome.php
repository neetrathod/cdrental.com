<!DOCTYPE html>
<?php
session_start();
?>


<head>
<link rel="shortcut icon" type="image/x-icon" href="ic.ico" />
<title>Admin</title>
</head>


<?php
if(isset($_SESSION['admn']))
{
	?>
	<frameset rows=75px,* border="0">
<frame src="header.php"></frame>

<frameset cols=15%,*>

<frame src="link.php" ></frame>
<frame src="changepas.php" name="change" ></frame>



</frameset>

</frameset>

	

	
	<?php
}
?>

<?php

if(!isset($_SESSION['admn']))
{
	
	echo header('location:../home.php');
	
	
}
	?>





