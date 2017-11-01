<?php
	
	session_start();
	
	if(isset($_SESSION['loggedin']) && isset($_SESSION['username']))
	{
		header('Location:Calendar_login.php');
	}
	else
	{
		header('Location:Calendar.php');
	}

?>