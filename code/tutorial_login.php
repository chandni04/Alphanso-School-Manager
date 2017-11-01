<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title id="name">Alphonsa School</title>
<link rel="icon" type="image/jpg" href="images/LOGO.jpg">
<link rel="stylesheet" href="tutoriallogin_css.css">

</head>

<body>
	<?php
		
		session_start();
		if(isset($_SESSION['username']))
		{
			$nm=$_SESSION['username'];
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
			$query=array('username' =>$nm);
			$cursor=$collection->find($query);
			foreach ($cursor as $document)
			{
			
				$class_nm=$document['class'];
			}
		}
		else
			$nm="guest";
	?>
	<div id="titlename">
  		<h1 id="schoolname"><i>ALPHONSA SCHOOL,MIRAJ</i></h1>
        <p id="username">Welcome <?php echo $nm; ?></p>
        <h2 id="tagline"><pre><i>Towards Promising Future...
        	To love God and men</pre></i></h2>
        
    </div>
    <script>
		function hid()
		{
		 var x=document.getElementById("titlename");
		  x.style.visibility="hidden";
		  var x=document.getElementById("slider");
		  x.style.visibility="hidden";
		  var x=document.getElementById("menu");
		  x.style.visibility="hidden";
		  var x=document.getElementById("apDiv9");
		  x.style.visibility="hidden";
		  var x=document.getElementById("apDiv17");
		  x.style.visibility="hidden";
		  var x=document.getElementById("footer");
		  x.style.visibility="hidden";
		}
	</script>
   
    <div id="overlay">
            <p id="message">You are successfully logged out..
            <br />Press below button to continue..</p>
            <div id="popup">
                  <a href=""><img class="close_button" src="images/close.png"/></a>
   				  <form class="signout" action="signout.php" method="post">
                  	<input type="submit" id="submitbtn" value="continue" tabindex="3" name="continue">
      			  </form>

      		</div>
 	 </div>
       
       
    <div id="slider">
    	
    	<div id="leftpart">
        	<ul id="leftlist">
            	<li id="first" class="firstanim"><a href="#"><img src="images/Homepage/Aim.jpg" width="400px" height="240px" /></a></li>
                <li id="second" class="secondanim"><a href="#"><img src="images/Homepage/Goal.jpg" width="400px" height="240px" /></a></li>
                <li id="third" class="thirdanim"><a href="#"><img src="images/Homepage/Vision.jpg" width="400px" height="240px" /></a></li>
                <li id="fourth" class="fourthanim"><a href="#"><img src="images/Homepage/mission.jpg" width="400px" height="240px" /></a></li>
               
            </ul> 
        </div>
       <div id="rightpart">
       	<ul id="rightlist">
        	 <li id="firstq" class="firstanimq"><p><b><center>Aim</b><br />-Forming intellectually developed emotionally mature,morally upright,patriotic and spiritually enlightened men and women<br />-Forming new generation of people who are committed to the task of building up a just society.<br />-Fostering love and respect for Indian spiritual values,culture and heritage.
</p></li>
             <li id="secondq" class="secondanimq"><p><b><center>Goals</b><br />To achieve the highest development of the total,man by imparting sound education,irrespective of class,caste or creed.
	This education should pave the way to brotherly association with other people,so that genuine unity and peace on earth may be promoted.
	A true education aims at the formation of the human person with respect to the good of those socities of which as man,he is a member.</p></li>
             <li id="thirdq" class="thirdanimq"><p><center>Vision<br />To be professionally managed organization committed to the empowerment of the deprived and marginalized people to enable them to enjoy 
	rights and opportunities and lead a harmonious life of dignity.
</p></li>
             <li id="fourthq" class="fourthanimq"><p><br/><br/<br/><b><center>Mission</b><b><br />To empower the underprivileged rural population,the disabled 


</p></li>
        </ul>
       </div>
    </div>
    
    <div id="menu">
    	<nav id="rolling-nav">
        	<ul>
      			<li><a href="index.php" data-clone="Home">Home</a></li>
                <li><a href="index_calendar.php" data-clone="Calendar">Calendar</a></li>
                <li><a href="index_gallery.php" data-clone="Gallery">Gallery</a></li>
                <li><a href="index_faculty.php" data-clone="Faculty">Faculty</a></li>
                <li><a href="index_tutorial.php" data-clone="Tutorial">Tutorial</a></li>
                <li><a href="index_feedback.php" data-clone="Feedback">Feedback</a></li>
                <li><a href="index_contactus.php" data-clone="Contactus">Contactus</a></li>
	        </ul>
        </nav>
    </div>
    
  <div id="middlepart">
  	<?php
	
		echo "<br><p>You have follwing assignments to complete..</p>";
	
		if($class_nm=="7th")
			$folder='7';
		else if($class_nm=="8th")
			$folder='8';
		else if($class_nm=="9th")
			$folder='9';
		else if($class_nm=="10th")
			$folder='10';
			
			
		$path='c:/xampp/htdocs/asm/tutorials/'.$folder.'/';
		
		$link_path="tutorials/".$folder."/";
	
		$entry=scandir($path);
		for($i=0;$i<sizeof($entry);$i++)
		{
			if($entry[$i]!="." && $entry[$i]!="..")
			{
				if(true==is_dir($path.$entry[$i].'/'))
				{
					$new_path=$path.$entry[$i].'/';
					$entry2=scandir($new_path);
					echo '<h1>'.strtoupper($entry[$i]).'</h1>';
					for($j=0;$j<sizeof($entry2);$j++)
					{
						if($entry2[$j]!="." && $entry2[$j]!=".." && false==is_dir($new_path.$entry2[$j].'/'))
						{
						
							echo "<a href='".$link_path.$entry[$i].'/'.$entry2[$j]."' target='_blank'>".$entry2[$j]."</a>";

						}
					}
				}
			}
		}
		
		
	
	?>
  </div>  
 
  <div id="apDiv9">
    <div id="apDiv15">
    <a id="signout" href="#overlay" onclick="hid()">signout</a>
    </div>
 <div id="apDiv17">
  
  <div id="apDiv18">
  	NEWS BULLETIN
  
  <marquee direction="up" behavior="scrole" scrollamount="2" scrolldelay="5" width="180px" height="450px">
  <?php
		$path = 'c:xampp\htdocs\extlib\ZendGdata\library';
  		$oldPath = set_include_path(get_include_path() . PATH_SEPARATOR . $path);
		require_once 'Zend/Loader.php';
		Zend_Loader::loadClass('Zend_Gdata');
		Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
		Zend_Loader::loadClass('Zend_Gdata_Calendar');
		Zend_Loader::loadClass('Zend_Http_Client');
		$gcal = Zend_Gdata_Calendar::AUTH_SERVICE_NAME;
		$user = "mywebsiteit005@gmail.com";
		$pass = "rushiit005";
		try
		{
		  $client = Zend_Gdata_ClientLogin::getHttpClient($user, $pass, $gcal);
		  $gcal = new Zend_Gdata_Calendar($client);
		
		  $query = $gcal->newEventQuery();
		  $query->setUser('default');
		  $query->setVisibility('private');
		  $query->setProjection('basic');
			  
		  $today=date("Y-m-d");
		  $nextday=mktime(0,0,0,date("m"),date("d")+15,date("Y"));
		  $nextday=date("Y-m-d",$nextday);
		
		  $query->setStartMin($today);
		  $query->setStartMax($nextday);
		  $query->setOrderby('starttime');
		  $feed = $gcal->getCalendarEventFeed($query);
		}
		catch (Zend_Gdata_App_Exception $e)
		{
		  echo "Error: " ;
		  echo $e;
		}
		$service = new Zend_Gdata_Calendar($client);
     	try
		{
      		$feed = $gcal->getCalendarEventFeed($query);
	    }
		catch (Zend_Gdata_App_Exception $e)
		{
	      echo "Error: " . $e->getResponse();
    	}
		foreach ($feed as $event)
		{
			 $test= $event->summary;
			 $pos = strpos($test, "E",20);
			 $date=substr($test,10,$pos-11);
			 $evnt=$event->title;

			 $comb=$evnt." ".$date;
			 echo $comb."<br /><br /><br />";
    	}
    
  ?>	
	
    
    School website launched<br /><br /><br /><br />
    
    Feedback Activity<br /><br /><br /><br />
    
    
    
  </marquee>
  </div>
  
 </div>
 
  <div id="footer">
   <hr id="hline" />
      <div id="copyright">
          &copy; Copyright Alphonsa School,Miraj 2013
      </div>
  </div>  


</body>
</html>
