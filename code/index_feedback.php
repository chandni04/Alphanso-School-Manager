<?php
	
	session_start();
	
	if(isset($_SESSION['loggedin']) && isset($_SESSION['username']))
	{
		header('Location:feedback_login.php');
	}
	else
	{
		header('Location:Feedback.php');
	}

?>