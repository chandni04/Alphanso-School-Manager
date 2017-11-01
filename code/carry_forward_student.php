<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$database='alphonsa_school';
/*		$coll='testcarryforward';*/
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
		$cursor=$collection->find();
		foreach($cursor as $document)
		{
			$tmp=$document['class'];
			if($tmp=='10th')
			{
				$collection->remove(array('class' =>$tmp));
			}
		}
		foreach($cursor as $document)
		{
			$tmp=$document['class'];
			
			if($tmp=='7th')
			{
				$document['class']='8th';
				$collection->save($document);
			}
			else if($tmp=='8th')
			{
				$document['class']='9th';
				$collection->save($document);
			}
			else if($tmp=='9th')
			{
				$document['class']='10th';
				$collection->save($document);
			}
			
		}
		echo 'all student successfully carry forwarded to next class...';
	?>
</body>
</html>