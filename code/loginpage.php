<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/jpg" href="images/LOGO.jpg">
<link rel="stylesheet" href="Homepage.css" />
<title>Untitled Document</title>
</head>

<body>
<?php
	echo 'in login';
?>
<h1>rushi</h1>
 <div id="overlay">
            <div id="popup">
          
            <a href=""><img class="close_button" src="images/close.png"/></a>
        
            <form class="login" action="check.php" method="post">

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