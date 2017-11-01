<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		if(isset($_POST['rollno']))
		{
			$class=$_POST['classlist'];
			$rollno=$_POST['rollno'];
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
				 $return=$collection->remove(array('class' =>$class,'rollno' =>$rollno));
				 if($return=='true')
				 {
					echo 'student with rollno '.$rollno.' is deleted successfully';
				 }
				 else
				 {
					 echo 'deletion unsuccess';
				 }
				 
			}
			else
			{
			/*	echo 'student with rollno '.$rollno.' is not registered';*/
			?>
            	<p style="color:rgb(255,0,0)">student with rollno <?php echo $rollno; ?> is not registered.</p>
            	<form action="student_delete.php" method="post">
                Select class:<select name="classlist" id="classlist" tabindex="1" title="Select Class">
                   <option value="7th" id="items">7th</option>
                   <option value="8th" id="items">8th</option>
                   <option value="9th" id="items">9th</option>
                   <option value="10th" id="items">10th</option>
                </select><br /><br />
                Rollno:<input type="text" name="rollno" required="required" /><br /><br />
                <input type="submit" value="delete student"  />
              </form>
            <?php
			}
		}
	?>
</body>
</html>