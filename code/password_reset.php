<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
  <?php
	if(isset($_POST['rollno']) && isset($_POST['password']) && isset($_POST['password2']))
  	{
		$class=$_POST['classlist'];
		$rollno=$_POST['rollno'];
		$pass1=$_POST['password'];
		$pass2=$_POST['password2'];
		$flg=1;
		if($pass1==$pass2)
		{
			$encrypted_password=md5($pass1);
			$database='alphonsa_school';
			$coll='login';
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
			$query=array('class' =>$class,'rollno' =>$rollno);
			$cursor=$collection->find($query);
			if($cursor->count()>0)
			{
				foreach($cursor as $document)
				{
				  $document['password']=$encrypted_password;
				  $collection->save($document);
				  echo 'password reset successful';
				}
			}
			else
			{
				$msg='student with rollno '.$rollno.' is not registered';
				$flg=0;
			}
		}
		else
		{
			$msg='both passwords do not match.';
			$flg=0;
		}
		if($flg==0)
		{
		?>
           
       
			<p style="color:rgb(255,0,0)"><?php echo $msg; ?></p>
            <form action="password_reset.php" method="post">
              Select class:<select name="classlist" id="classlist" tabindex="1" title="Select Class">
                 <option value="7th" id="items">7th</option>
                 <option value="8th" id="items">8th</option>
                 <option value="9th" id="items">9th</option>
                 <option value="10th" id="items">10th</option>
              </select><br /><br />
              Rollno:<input type="text" name="rollno" required="required" /><br /><br />
              New Password:<input type="password" name="password" required="required" /><br /><br />
              Confirm Password:<input type="password" name="password2" required="required" /><br /><br />
              <input type="submit" value="reset password" />
            </form>
         <?php	
		}
	}
  ?>
</body>
</html>