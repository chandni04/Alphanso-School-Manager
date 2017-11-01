<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$classes=array();
		$ptr=0;
		if(isset($_POST['7th']) || isset($_POST['8th']) || isset($_POST['9th']) || isset($_POST['10th']))
		{
			if(!empty($_POST['7th']))
			{
				$classes[$ptr]='7th';
				$ptr++;
			}
			if(!empty($_POST['8th']))
			{
				$classes[$ptr]='8th';
				$ptr++;
			}
			if(!empty($_POST['9th']))
			{
				$classes[$ptr]='9th';
				$ptr++;
			}
			if(!empty($_POST['10th']))
			{
				$classes[$ptr]='10th';
				$ptr++;
			}
			$database='alphonsa_school';
			try
			{
				$m = new Mongo('localhost');
			}
			catch(Exception $e)
			{
				  die('Error connecting to MongoDB server');	
			}
			$db=$m->$database;
			foreach($classes as $class)
			{
				if($class=='7th')
				{
					$coll1='seventh';
					$coll2='seventhfeedbacks';
					$coll3='seventhfeedbackanalysis';
					$subjects=array("english","marathi","hindi","algebra","geomatry","history","geography","science1","science2"); 
				}
				else if($class=='8th')
				{
					$coll1='eightth';
					$coll2='eightthfeedbacks';
					$coll3='eightthfeedbackanalysis';
					$subjects=array("english","marathi","hindi","algebra","geomatry","history","geography","science1","science2"); 
				}
				else if($class=='9th')
				{
					$coll1='ninth';
					$coll2='ninthfeedbacks';
					$coll3='ninthfeedbackanalysis';
					$subjects=array("english","marathi","hindi","algebra","geomatry","history","geography","economics","civics","science1","science2"); 
				}
				else if($class=='10th')
				{
					$coll1='tenth';
					$coll2='tenthfeedbacks';
					$coll3='tenthfeedbackanalysis';
					$subjects=array("english","marathi","hindi","algebra","geomatry","history","geography","economics","civics","science1","science2"); 
				}
				
				$collection = $db->$coll1;
				$cursor=$collection->find();
				foreach($cursor as $document)
				{
					for($i=0;$i<sizeof($subjects);$i++)
					{
						$document[$subjects[$i]]='false';
					}
				
					$collection->save($document);
				}
				$collection = $db->$coll2;
				$collection->remove();				
				$collection = $db->$coll3;
				$collection->remove();
				
				
			}
			echo 'feedback reseted for selected class(es)';	
		}
		else
		{
/*			echo 'atleast select one class';*/
		?>
        	<form action="feedback_reset.php" method="post">
            <p style="color:rgb(255,0,0)">atleast select one class</p>
            7th:<input type="checkbox" name="7th" value="7th" /><br /><br />
            8th:<input type="checkbox" name="8th" value="8th" /><br /><br />
            9th:<input type="checkbox" name="9th" value="9th" /><br /><br />
            10th:<input type="checkbox" name="10th" value="10th" /><br /><br />
            <input type="submit" value="reset feedback" />
    </form>
        <?php    
		}
	?>
</body>
</html>