<?php
	
	session_start();
	
	if(isset($_SESSION['loggedin']) && isset($_SESSION['username']))
	{
		header('Location:userlogin.php');
	}
	else
	{
		header('Location:Homepage.php');
	}

?>