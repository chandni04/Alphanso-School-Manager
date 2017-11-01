<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback Page</title>
<link rel="stylesheet" href="feedback_page_css.css" />
</head>

<body>
	 <script>
	 	function myfun()
		{
		/*	var x=document.getElementById("mainform");
		  	x.style.visibility="hidden";*/
		
			window.history.back()
		}
	 </script>
     
     <?php
	 	session_start();
		$sub=$_GET['subject'];
		$_SESSION['subject']=$sub;
	 ?>
	 <div id="mainform">
        <p id="msg">Fill in the following form</p>
        <hr />
        <form action="feedback_store.php" method="post">
        <ol id="orderdlist">
          <li id="quelist">
            <label id="que1" class="que">Information regarding the subject is clear,accurate and helpful.</label><br />
            <input type="radio" id="que1" name="que1" value="Always"/>Always<br />
            <input type="radio" id="que1" name="que1" value="Often" checked="checked"/>Often<br />
            <input type="radio" id="que1" name="que1" value="Attimes"/>Attimes<br />
            <input type="radio" id="que1" name="que1" value="Never"/>Never<br />  
          </li>
          <hr />
          <li id="quelist">
            <label id="que2" class="que">Teaching is well and also challenging for doing best in the subject.</label><br />
            <input type="radio" id="que2" name="que2" value="Always"  />Always<br />
            <input type="radio" id="que2" name="que2" value="Often" checked="checked" />Often<br />
            <input type="radio" id="que2" name="que2" value="Attimes" />Attimes<br />
            <input type="radio" id="que2" name="que2" value="Never" />Never<br />  
          </li>
          <hr />
          <li id="quelist">
            <label id="que3" class="que">Is homework set regularly by teacher?</label><br />
            <input type="radio" id="que1" name="que3" value="Always"/>Always<br />
            <input type="radio" id="que1" name="que3" value="Often" checked="checked" />Often<br />
            <input type="radio" id="que1" name="que3" value="Attimes" />Attimes<br />
            <input type="radio" id="que1" name="que3" value="Never" />Never<br />  
          </li>
          <hr />
          <li id="quelist">
            <label id="que4" class="que">Is regular assessment helps you to check your improvement in study?</label><br />
            <input type="radio" id="que1" name="que4" value="Always"  />Always<br />
            <input type="radio" id="que1" name="que4" value="Often" checked="checked"/>Often<br />
            <input type="radio" id="que1" name="que4" value="Attimes" />Attimes<br />
            <input type="radio" id="que1" name="que4" value="Never" />Never<br />  
          </li>
          <hr />
          <li id="quelist">
            <label id="que5" class="que">Teacher are always available and ready to solve your difficulty.</label><br />
            <input type="radio" id="que1" name="que5" value="Always"/>Always<br />
            <input type="radio" id="que1" name="que5" value="Often" checked="checked"/>Often<br />
            <input type="radio" id="que1" name="que5" value="Attimes" />Attimes<br />
            <input type="radio" id="que1" name="que5" value="Never" />Never<br />  
          </li>
          <hr />
          <li id="quelist">
            <label id="que6" class="que">Communication skill of teacher is enough good to understand teaching.</label><br />
            <input type="radio" id="que1" name="que6" value="Always" />Always<br />
            <input type="radio" id="que1" name="que6" value="Often" checked="checked"/>Often<br />
            <input type="radio" id="que1" name="que6" value="Attimes" />Attimes<br />
            <input type="radio" id="que1" name="que6" value="Never" />Never<br />  
          </li>
          <hr />
          <li id="quelist">
            <label id="que7" class="que">Teacher encourages to participate in different competition related to this subject.</label><br />
            <input type="radio" id="que1" name="que7" value="Always"  />Always<br />
            <input type="radio" id="que1" name="que7" value="Often" checked="checked" />Often<br />
            <input type="radio" id="que1" name="que7" value="Attimes" />Attimes<br />
            <input type="radio" id="que1" name="que7" value="Never" />Never<br />  
          </li>
          <hr />
          <li id="quelist">
            <label id="que8" class="que">Teacher helps to participate in national or international level competition.</label><br />
            <input type="radio" id="que1" name="que8" value="Always" />Always<br />
            <input type="radio" id="que1" name="que8" value="Often" checked="checked"/>Often<br />
            <input type="radio" id="que1" name="que8" value="Attimes" />Attimes<br />
            <input type="radio" id="que1" name="que8" value="Never" />Never<br />  
          </li>
          <hr />
          <li id="quelist">
            <label id="que9" class="que">Proper interaction is there between student and teacher in classroom.</label><br />
            <input type="radio" id="que1" name="que9" value="Always"/>Always<br />
            <input type="radio" id="que1" name="que9" value="Often" checked="checked"/>Often<br />
            <input type="radio" id="que1" name="que9" value="Attimes" />Attimes<br />
            <input type="radio" id="que1" name="que9" value="Never" />Never<br />  
          </li>
          <hr />
          <li id="quelist">
          	<label id="que10" class="que">Difficult topic(s) in the subject:</label><br />
            <textarea id="dt" name="difficulttopic" rows="5" cols="30" required="required" ></textarea>
          </li>
          <hr />
          <li id="quelist">
          	<label id="que11" class="que">Any suggestion/comment(s):</label><br />
            <textarea id="comment" name="comment" rows="5" cols="30" required="required" ></textarea>
          </li>
          <hr />

        </ol>
        <input type="submit" id="submtbtn" name="submit" value="Submit your feedback" />
        </form>
      </div>
      
    
      
      
</body>
</html>
