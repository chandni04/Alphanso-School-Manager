<?php
	
	session_start();
	
	if(isset($_SESSION['loggedin']) && isset($_SESSION['username']))
	{
		header('Location:ContactUS.html');
	}
	else
	{
		header('Location:ContactUS.html');
	}

?>