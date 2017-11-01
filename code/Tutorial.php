<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title id="name">Alphonsa School</title>
<link rel="icon" type="image/jpg" href="images/LOGO.jpg">
<link rel="stylesheet" href="Tutorial.css">
<style type="text/css">
</style>
</head>

<body>
	 <div id="titlename">
  		<h1 id="schoolname"><i>ALPHONSA SCHOOL,MIRAJ</i></h1>
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
		  var x=document.getElementById("middlepart");
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
            
            <div id="popup">
                  <a href=""><img class="close_button" src="images/close.png"/></a>
   				  <form class="login" action="display.php" method="post">
                  	<label id="lbl1">Username</label>
     				<input type="text" tabindex="1" class="input1" placeholder="username" name="username" required>
      				<label id="lbl2">Password</label>
      				<input type="password" class="input2" tabindex="2" placeholder="password" name="password" required>
                    <input type="submit" id="submitbtn" value="Login" tabindex="3" name="submit">
      			  </form>

      		</div>
 	 </div>
       
       <div id="overlay_signup">
            <div id="popup" style="height:500px;">
          <a href=""><img class="close_button" src="images/close.png"/></a>
          
    
          <form class="signup" method="post" action="add.php">
                <label id="lbl11">Select Class*</label>	
                <select name="classlist" id="classlist" tabindex="1" title="Select Class">
                   <option value="7th" id="items">7th</option>
                   <option value="8th" id="items">8th</option>
                   <option value="9th" id="items">9th</option>
                   <option value="10th" id="items">10th</option>
                </select>
                <label id="lbl22">RollNo*</label>
                  <input type="text" tabindex="2" class="input1" placeholder="e.g.123" name="rno" required>
                <label id="lbl33">Username*</label>
                  <input type="text" tabindex="3" class="input2" placeholder="e.g.Smith" name="unm" required>
                <label id="lbl44">Password*</label>
                  <input type="password" class="input3" tabindex="4" name="pass" required><br><br>
                <label id="lbl55">Confirm*<br />Password</label>
                  <input type="password" class="input4" tabindex="5" name="cpass" required><br><br>
                <input type="submit" id="submitbtn2" value="SignUp" tabindex="6">
         </form>
        </div>
        </div>
            <div id="slider">
                
                <div id="leftpart">
                    <ul id="leftlist">
                        <li id="first" class="firstanim"><a href="#"><img src="images/Calender/time.jpg" width="400px" height="240px" /></a></li>
                        <li id="second" class="secondanim"><a href="#"><img src="images/Calender/sky.jpg" width="400px" height="240px" /></a></li>
                        <li id="third" class="thirdanim"><a href="#"><img src="images/Calender/sheep.jpg" width="400px" height="240px" /></a></li>
                        <li id="fourth" class="fourthanim"><a href="#"><img src="images/Calender/success.jpg" width="400px" height="240px" /></a></li>
                       
                    </ul> 
                </div>
               <div id="rightpart">
                <ul id="rightlist">
                     <li id="firstq" class="firstanimq"><p>Manage the things that take your time.
                      Time is expensive – Don't waste it<br/>
                      Time is perishable You cannot save time for later use.<br/>
                      Time is measurable – Use it wisely<br/>
                      Time is irreplaceable</p></li>
                     <li id="secondq" class="secondanimq"><p>"The sky has never been the limit. We are our own limits. It's then about breaking our personal limits and outgrowing ourselves to live our best lives."
        </p></li>
                     <li id="thirdq" class="thirdanimq"><p>Do not wait for your sheep to come in-swim out to it.Days in calender never wait for anyone.
        </p></li>
                     <li id="fourthq" class="fourthanimq"><p>Great works are performed,not by strength,but by perserverance
                    -Willium Arthur Ward</p></li>
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
            	<p>Please login to see tutorials...</p>
                <p id="loginbtn">
                	<a href="#overlay" onclick="hid()" >Login</a>	              
                   
                </p>
            </div>
            <div id="apDiv9">
              <div id="apDiv15">
                <a id="login"  href="#overlay" onclick="hid()">Login</a>
                <a id="register" href="#overlay_signup" onclick="hid()">Register</a>
              </div>
              <div id="apDiv16">Login &amp; Register
              </div>
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
