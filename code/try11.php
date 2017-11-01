
<?php
  function hello($p)
  {  
     echo "<html >";
	 echo "<head>";
	 echo "<meta http-equiv=Content-Type content=text/html; charset=utf-8/>";
	 
	 echo "<link rel=stylesheet href=try12.css>";
	 
	 echo "</head>";
   echo "<body background=images/main_background.jpg>";
	
	echo "<div id=popup>";
	echo "<a href=><img class=close_button src=images/close.png></a>";
	 	$username=$p;
  	$database='alphonsa_school';
	$coll='faculty';
	$flg=0;
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
				$cursor = $collection->find();
				foreach ($cursor as $document)
				{
						
					$unm=$document['f_id'];
					
					if($username==$unm)
					{ 
						
						echo "<div id=al><p>NAME:";
						echo $document['name'];
   						echo "</p><p>Qualification:";
						echo $document['qualification'];
						echo "</p><p>Subjects:";
						echo "English,Maths";
						echo "<div id=if1><iframe align=left width=180px height=200px/></div>";
}
						
				}
		echo "</div> </body> </html>";
  }
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title id="name">Alphonsa School</title>
<link rel="icon" type="image/jpg" href="images/LOGO.jpg">
<link rel="stylesheet" href="try12.css">

</head>

<body >
	 <div id="titlename">
  		<h1 id="schoolname"><i>ALPHONSA SCHOOL,MIRAJ</i></h1>
        <h2 id="tagline"><pre><i>Towards Promising Future...
        	To love God and men</pre></i></h2>
        
    </div>
    <script>
		function hid(p)
		{
		  var x=document.getElementById("rolling-nav");
		  x.style.visibility="hidden";
		   var x=document.getElementById("titlename");
		  x.style.visibility="hidden";
		  var x=document.getElementById("slider");
		  x.style.visibility="hidden";
		   var x=document.getElementById("menu");
		  x.style.visibility="hidden";
		  var x=document.getElementById("apDiv16");
		  x.style.visibility="hidden";
		  var x=document.getElementById("footer");		
		  x.style.visibility="hidden";
		  
		var g=p;
		document.write(g);
		if(g==1)
		document.write("<?php hello(1);?>");
		if(g==2)
		document.write("<?php hello(2);?>");
		if(g==3)
		document.write("<?php hello(3);?>");
		if(g==4)
		document.write("<?php hello(4);?>");
		if(g==5)
		document.write("<?php hello(5);?>");
		if(g==6)
		document.write("<?php hello(6);?>");
		if(g==7)
		document.write("<?php hello(7);?>");
		if(g==8)
		document.write("<?php hello(8);?>");
		if(g==9)
		document.write("<?php hello(9);?>");
		if(g==10)
		document.write("<?php hello(10);?>");
		if(g==11)
		document.write("<?php hello(11);?>");
		if(g==12)
		document.write("<?php hello(12);?>");
		if(g==13)
		document.write("<?php hello(13);?>");
		if(g==14)
		document.write("<?php hello(14);?>");
		if(g==15)
		document.write("<?php hello(15);?>");
		if(g==16)
		document.write("<?php hello(16);?>");
		if(g==17)
		document.write("<?php hello(17);?>");
		if(g==18)
		document.write("<?php hello(18);?>");
		if(g==19)
		document.write("<?php hello(19);?>");
		if(g==20)
		document.write("<?php hello(20);?>");
		if(g==21)
		document.write("<?php hello(21);?>");
		if(g==22)
		document.write("<?php hello(22);?>");
}
</script>
    
<div id="slider">
    	
    	<div id="leftpart">
        	<ul id="leftlist">
            	<li id="first" class="firstanim"><a href="#"><img src="images/Faculty/radhakrishna.jpg" width="400px" height="240px" /></a></li>
                <li id="second" class="secondanim"><a href="#"><img src="images/Faculty/Abdul_Kalam.png" width="400px" height="240px" /></a></li>
                <li id="third" class="thirdanim"><a href="#"><img src="images/Faculty/vivekanand.jpg" width="400px" height="240px" /></a></li>
                <li id="fourth" class="fourthanim"><a href="#"><img src="images/Faculty/Aristotal.jpg" width="400px" height="240px" /></a></li>
               
            </ul> 
        </div>
       <div id="rightpart">
       	<ul id="rightlist">
        	 <li id="firstq" class="firstanimq"><p><br /><br/><br/>"A good teacher is like a candle - it consumes itself to light the way for others."<br/>- Dr. Radhakrishnan </p></li>
             <li id="secondq" class="secondanimq"><p><br/><br/><br/>"Be more dedicated to making solid achievements than in running after swift but synthetic happiness."
<br/>-Abdul Kalam</p></li>
             <li id="thirdq" class="thirdanimq"><p><br/><br/><br/>"When an idea exclusively occupies the mind, it is transformed into an actual physical or mental state."<br/>-Swami Vivekananda</p></li>
             <li id="fourthq" class="fourthanimq"><p><br/><br/><br/>"Those who educate children well are more to be honored than they who produce them; for these only gave them life, those the art of living well."<br/>― Aristotle</p></li>
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
    
    
    <div>
  <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="apDiv16">
  <div id="apDiv4">FACULTY</div>
  <div id="apDiv17"><img name="Princi" src="images/Faculty/princi.jpg" width="156" height="153" alt="" /></div>
 
  <div id="apDiv37">
 
  
  <table width="659"  cellpadding="12">
  <tr>
    <td><a  onclick="hid(1)">
      <input name="b" type="button" class="submitbtn" style="left: 35px; top: 60px; color:#FFF" value="Fr Jojo Augustine" />
    </a></td>
    <td><a  onclick="hid(2)">
    <input name="B1" type="button" class="submitbtn" style="left: 430px; top: 60px;"value="Mr Deshmukh Hindurao" /></a></td>
  </tr>
  <tr>
     <td><a onclick="hid(3)">
     <input name="B1" type="button" class="submitbtn" style="left: 35px; top: 110px;" value="Mrs. Bindu Jestin" /></a></td>
    <td>
    <a onclick="hid(4)">
    <input name="B1" type="button" class="submitbtn" style="left: 430px; top: 110px;" value="Mrs Cecilia Woodward" /></a></td>
 
  </tr>
  <tr>
     <td><a  onclick="hid(5)">
     <input name="B1"  type="button" class="submitbtn" style="left: 35px; top: 160px;" value="Mr Justin Xavier" /></a></td>
    <td><a  onclick="hid(6)">
    <input  name="B1" type="button" class="submitbtn" style="left: 430px; top: 160px;" value="Mrs Smita Deshpande" /></a></td>
 
  </tr>
  <tr>
     <td><a  onclick="hid(7)">
     <input name="B1"  type="button" class="submitbtn" style="left: 35px; top: 210px;" value="Mrs Mahindrakar Sushma" /></a></td>
    <td><a  onclick="hid(8)">
    <input  name="B1" type="button" class="submitbtn" style="left: 430px; top: 210px;" value="Mrs Patil Seema Sanjay" /></a></td>
  </tr>
  <tr>
    <td><a  onclick="hid(9)">
     <input name="B1"  type="button" class="submitbtn" style="left: 35px; top: 260px;" value="Mr Vijay Dhumal" /></a></td>
    <td><a  onclick="hid(10)">
    <input  name="B1" type="button" class="submitbtn" style="left: 430px; top: 260px;" value="Mrs K N P Surekha" /></a></td>
  </tr>
  <tr>
   <td><a  onclick="hid(11)">
     <input name="B1"  type="button" class="submitbtn" style="left: 35px; top: 310px;" value="Mrs Savita Savant" /></a></td>
    <td><a  onclick="hid(12)">
    <input  name="B1" type="button" class="submitbtn" style="left: 430px; top: 310px;" value="Mrs Jaya Kamle" /></a></td>
  </tr>
  <tr>
    <td><a  onclick="hid(13)">
     <input name="B1"  type="button" class="submitbtn" style="left: 35px; top: 360px;" value="Ms Pratibha Hetkale" /></a></td>
    <td><a  onclick="hid(14)">
    <input  name="B1" type="button" class="submitbtn" style="left: 430px; top: 360px;" value="Mrs Archana Kargar" /></a></td>
  </tr>
  <tr>
    <td><a  onclick="hid(15)">
     <input name="B1"  type="button" class="submitbtn" style="left: 35px; top: 410px;" value="Mr G Prasanna" /></a></td>
    <td><a  onclick="hid(16)">
    <input  name="B1" type="button" class="submitbtn" style="left: 430px; top: 410px;" value="Mrs Kudche Sarika" /></a></td>  </tr>
  <tr>
    <td><a  onclick="hid(1)">
     <input name="B1"  type="button" class="submitbtn" style="left: 35px; top: 460px;" value="Mr Justin Xavier" /></a></td>
    <td><a  onclick="hid(18)">
    <input  name="B1" type="button" class="submitbtn" style="left: 430px; top: 460px;" value="Mrs Aparna Shinde" /></a></td>
  </tr>
  <tr>
    <td><a  onclick="hid(19)">
     <input name="B1"  type="button" class="submitbtn" style="left: 35px; top: 510px;" value="Mrs Chougule Veena" /></a></td>
    <td><a  onclick="hid(20)">
    <input  name="B1" type="button" class="submitbtn" style="left: 430px; top: 510px;" value="Mrs Chougule Sheela" /></a></td>
  </tr>
  <tr>
   <td><a  onclick="hid(21)">
     <input name="B1"  type="button" class="submitbtn" style="left: 35px; top: 560px;" value="Mrs Neelam Khot" /></a></td>
    <td><a  onclick="hid(22)">
    <input  name="B1" type="button" class="submitbtn" style="left: 430px; top: 560px;" value="Mrs Anjali Khot" /></a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

</table>

  </div>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="footer">
	<hr id="hline" />
	<div id="copyright">
    	&copy; Copyright Alphonsa School,Miraj 2013
    </div>
</div>

</body>
</html>
