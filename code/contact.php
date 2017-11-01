<?php
	$database='alphonsa_school';
	$coll='messages';
	if(isset($_POST['name']) && isset($_POST['eaaddr']) && isset($_POST['message']))
	{
		
		$name=$_POST['name'];
		$email=$_POST['eaaddr'];
		$msg=$_POST['message']."<br>".$email;
		
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			echo '<h1 style="color:RED">email not valid</h1>';
		}
		else
		{
			  if(isset($_POST['bday']))
			  $bday=$_POST['bday'];
		  else
			  $bday='';
		  if(isset($_POST['sco']))
			  $sco=$_POST['sco'];
		  else
			  $sco='';
		  if(isset($_POST['contact']))
			  $cno=$_POST['contact'];
		  else
			  $cno='';	
		 $msg="Birth Date: ".$bday.'<br>'."Organisation: ".$sco.'<br>'."Contact No: ".$cno.'<br>'."Message: ".$msg;
		  if(!empty($name) && !empty($email) && !empty($msg))
		  {
			  $to = "alphonsaschool.project@gmail.com";
			  $subject = "enquiry";
			  $message = $msg;
			  $from = $email;
			  $headers .= "MIME-Version: 1.0\r\n";
			  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			  $headers .="From:".$from;
			  $message="From:".$from.$msg;	
			  try
			  {
				  $m = new Mongo('localhost');
			  }
			  catch(Exception $e)
			  {
				  echo "<script language=javascript>alert('Error connecting to MongoDB server')</script>";
			  }
			  $db=$m->$database;
			  $collection = $db->$coll;
			  $cursor=$collection->find();
			  $document=array("name"=>$name,"email"=>$email,"message"=>$msg,"contact"=>$cno,"organization"=>$sco,"bday"=>$bday);
			  $collection->insert($document);
			  
			 
			 if(mail($to,$subject,$message,$headers,$name))
			  echo "<script language=javascript>alert('Mail has been send successfull.Thank you:)')</script>";			  		  			 else
			  echo "<script>var r=confirm('Stored in DB')</script>";
			  if(r==true)
			  {
				   header('Location:index.php');
			  }
			 echo "<script language=javascript>alert('Mail cannot be send. Some problem in Internet Connection:(')</script>";
			
			 
			  
		  }
		  else
			  echo "<script language=javascript>alert('enter required fields')</script>";
		  }
		
		
	}
	else
					  echo "<script language=javascript>alert('Enter required fields')</script>";
					  
								  
		
?>
<html>
<body>
<form action="contact.html">
</form>

</body>
</html>