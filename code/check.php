<?php
	
		
					
		echo 'start';
		session_start();
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
				{
					echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
					$_SESSION['loggedin']=false;
				}
				else
				{
					
					echo "Please log in first to see this page.";
					header("Location:loginpage.php");
                    
				}
		
						  

?>