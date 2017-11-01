<?php
	
	session_start();
	
	if(isset($_SESSION['loggedin']) && isset($_SESSION['username']))
	{
		header('Location:Faculty.php');
	}
	else
	{
		header('Location:Faculty.php');
	}

?>