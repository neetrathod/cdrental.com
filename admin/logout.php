<?php
session_start();
	
	session_destroy();
	
	header("location:../home.php");
	
	
	
	
	
?>
<script>

function RefreshWindow()
{
         window.location.reload(true);
}

</script>




