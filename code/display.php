
<?php
		session_start();
	
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$encrypted_password=md5($password);
			$database='alphonsa_school';
			$coll='login';
			$flg=0;
			if(!empty($username) && !empty($password))
			{
				try
				{
					$m = new Mongo('localhost');
				}
				catch(Exception $e)
				{
					  die('Error connecting to MongoDB server');	
				}
				$db=$m->$database;
				$collection = $db->$coll;
				$cursor = $collection->find();
				
				foreach ($cursor as $document)
				{
					
					$unm=$document['username'];
					
					if($username==$unm)
					{
						$pass=$document['password'];
						if($encrypted_password==$pass)
						{
							$flg=1;
							break;
						}
						
					}
					else
					{
						$flg=0;
					}
				}
				if($flg==1)
				{
					$_SESSION['loggedin'] = true;
				    $_SESSION['username'] = $unm;
					
					$query=array('username' =>$unm,'password' =>$encrypted_password);
					$cursor=$collection->find($query);
					
					
					foreach ($cursor as $document)
					{
					
						$class_nm=$document['class'];
					}

					header('Location:index.php');
				}
				else
				{
					?>
			<html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="icon" type="image/jpg" href="images/LOGO.jpg">
            <link rel="stylesheet" href="loginincorrect_css.css" />
            <title>incorrect login</title>
            </head>
            
            <body>
            
             <div id="overlay">
                        <div id="popup">
                      
                        <a href=""><img class="close_button" src="images/close.png"/></a>
                    
                    	<p style="color:rgb(255,0,0)">Username/Password is incorrect</p>
                        <form class="login" action="display.php" method="post">
            
                          <label id="lbl1">Username</label>
                
                          <input type="text" tabindex="1" class="input1" placeholder="username" name="username" required>
                
                          <label id="lbl2">Password</label>
                
                          <input type="password" class="input2" tabindex="2" placeholder="password" name="password" required>
            
                                     
                          <input type="submit" id="submitbtn" value="Login" tabindex="3" name="submit">
                
            
                    	</form>
            
                		</div>
                </div>
            
            </body>
            
            </html>
				
				<?php
                }
			}
			else
			{
				
				echo 'u must supply required fields';
			
            }
		}
		else
		{
			
			echo 'error';
		}
		

?>
