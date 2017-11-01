<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
  <?php
  	if(isset($_POST['rollno']) && isset($_POST['username']))
	{
		$class=$_POST['classlist'];
		$rollno=$_POST['rollno'];
		$username=$_POST['username'];
		$database='alphonsa_school';
		$coll='login';
		$flg=1;
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
			$query=array('class' =>$class,'username' =>$username);
			$cursor2=$collection->find($query);
			if($cursor2->count()==0)
			{
				foreach($cursor as $document)
				{
				  $document['username']=$username;
				  $collection->save($document);
				  echo 'username successfully changed';
				}	
			}
			else if($cursor2->count()>0)
			{
				$msg='username '.$username.' already exist';
				$flg=0;
			}			
		}
		else
		{
			$flg=0;
			$msg='student with rollno '.$rollno.' is not registered';
		}
		if($flg==0)
		{
		?>
        	<p style="color:rgb(255,0,0)"><?php echo $msg; ?></p>
            <form action="username_update.php" method="post">
            Select class:<select name="classlist" id="classlist" tabindex="1" title="Select Class">
               <option value="7th" id="items">7th</option>
               <option value="8th" id="items">8th</option>
               <option value="9th" id="items">9th</option>
               <option value="10th" id="items">10th</option>
            </select><br /><br />
            Rollno:<input type="text" name="rollno" required="required" /><br /><br />
            New Username:<input type="text" name="username" required="required" /><br /><br />
            <input type="submit" value="update username" />
          </form>
        <?php	
		}
	}
  ?>
</body>
</html>