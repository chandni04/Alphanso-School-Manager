<?php
  if(isset($_POST['username']) && isset($_POST['password']))
  {
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  $encrypted_password=md5($password);
	  $database='alphonsa_school';
	  $coll='admin';
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
	  $query=array('username' =>$username,'password' =>$encrypted_password);
	  $cursor=$collection->find($query);
	  if($cursor->count()>0)
	  {?>
		 <a href="password_reset.html" target="_blank">Reset Password of a student</a><br /><br />
         <a href="username_update.html" target="_blank">Change username of a student</a><br /><br />
         <a href="student_delete.html" target="_blank">Delete a student</a><br /><br />
         <a href="feedback_reset.html" target="_blank">Reset Feedack Session</a><br /><br />
         <a href="carry_forward_student.php" target="_blank">Carry forward student to next class</a>
	 <?php 
	 }
	  else
	  {
		  echo 'username/password is incorrect';
	  }
	  
  }

?>