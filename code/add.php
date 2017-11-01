<?php
	
	if(isset($_POST['rno']) && isset($_POST['unm']) && isset($_POST['pass']) && isset($_POST['cpass']))
	{
		
		$rno=$_POST['rno'];
		$class=$_POST['classlist'];
		$unm=$_POST['unm'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		$database='alphonsa_school';
		$coll='login';
		$unm_flg=0;	
		
		if(!empty($rno) && !empty($class) && !empty($unm) && !empty($pass) && !empty($cpass))
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
			$cursor=$collection->find();
			
			foreach($cursor as $document)
			{
				$username=$document['username'];
				$inputrollno=$document['rollno'];
				$class_name=$document['class'];
				
				if($class==$class_name)
				{
				  if($unm==$username || $rno==$inputrollno)
				  {
					  $unm_flg=1;
					  break;
				  }
				  else
					  $unm_flg=0;
				}
			}
			if($unm_flg==1)
				echo '<h1 style="color:RED">username/rollno already exists</h1>';
			else
			{
				if($pass==$cpass)
				{
					$encrypted_password=md5($pass);
					$document=array("class"=>$class,"rollno"=>$rno,"username"=>$unm,"password"=>$encrypted_password);
					$collection->insert($document);
					
					
					
					if($class=="7th")
						$coll="seventh";
					else if($class=="8th")
						$coll="eightth";
					else if($class=="9th")
						$coll="ninth";
					else if($class=="10th")
						$coll="tenth";
								
					if($class=="7th" || $class=="8th")
					{
						$subjects=array("english","marathi","hindi","algebra","geomatry","history","geography","science1","science2"); 
						$document=array("username"=>$unm,$subjects[0]=>'false',$subjects[1]=>'false',$subjects[2]=>'false',$subjects[3]=>'false',$subjects[4]=>'false',$subjects[5]=>'false',$subjects[6]=>'false',$subjects[7]=>'false',$subjects[8]=>'false');
					}
					
					if($class=="9th" || $class=="10th")
					{
						$subjects=array("english","marathi","hindi","algebra","geomatry","history","geography","economics","civics","science1","science2"); 
						$document=array("username"=>$unm,$subjects[0]=>'false',$subjects[1]=>'false',$subjects[2]=>'false',$subjects[3]=>'false',$subjects[4]=>'false',$subjects[5]=>'false',$subjects[6]=>'false',$subjects[7]=>'false',$subjects[8]=>'false',$subjects[9]=>'false',$subjects[10]=>'false');
					}
					$db=$m->$database;
					$collection = $db->$coll;
					$collection->insert($document);
					
					header('Location:usercreate.php');
					echo '<h1 style="color:GREEN">user successfully created</h1><a href="Homepage.php"><br>HOME</a>';
				
				}
				else
					echo '<h1 style="color:RED">password do not match</h1>';
			}
		}
	}
	else
		echo 'Enter all required field';
?>