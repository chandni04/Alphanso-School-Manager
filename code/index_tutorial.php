<?php
	
	session_start();
	
	if(isset($_SESSION['loggedin']) && isset($_SESSION['username']))
	{
		header('Location:tutorial_login.php');
	}
	else
	{
		header('Location:Tutorial.php');
	}

?>