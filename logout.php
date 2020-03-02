<?php

session_start();

if(isset($_SESSION['user']))
{

	header('location:home.php');
	session_destroy();
	

}


else
{
	header('location:home.php');
}
	
?>
