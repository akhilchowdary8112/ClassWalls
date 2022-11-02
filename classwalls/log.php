<?php 
	session_start();
	unset($_SESSION['usn']);
	if($_SESSION['usn']=='')
	{
		header("location:LoRe.html");
	}
	
				
?>
