<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback Page</title>
<link rel="stylesheet" href="feedback_message_css.css" />
</head> 
  <?php
	
	 	session_start();
	
	  	if(isset($_POST['submit']))
		{
			$ans=array();
			$que=array("que1","que2","que3","que4","que5","que6","que7","que8","que9");
			$questions=array("Information regarding the subject is clear,accurate and helpful.","Teaching is well and also challenging for doing best in the subject.","Is homework set regularly by teacher?","Is regular assessment helps you to check your improvement in study?","Teacher are always available and ready to solve your difficulty.","Communication skill of teacher is enough good to understand teaching.","Teacher encourages to participate in different competition related to this subject.","Teacher helps to participate in national or international level competition.","Proper interaction is there between student and teacher in classroom.","Difficult topic(s) in the subject:","Any suggestion/cooment(s):");
			$cnt=9;
			$point=0;;
			for($i=0;$i<$cnt;$i++)
			{
				$ans[$i]=$_POST[$que[$i]];
				$point++;
			}
			
			$ans[$point]=$_POST['difficulttopic'];
			$point++;
			$ans[$point]=$_POST['comment'];
			
			if(isset($_SESSION['class']))
			{
				$class=$_SESSION['class'];
			}
			if(isset($_SESSION['subject']))
			{
				$sub=$_SESSION['subject'];
			}
			if($class=="7th")
			{
				$coll="seventh";
				$coll2="seventhfeedbacks";
				$coll3="seventhfeedbackanalysis";
			}
			else if($class=="8th")
			{
				$coll="eightth";
				$coll2="eightthfeedbacks";
				$coll3="eightthfeedbackanalysis";
			}
			else if($class=="9th")
			{
				$coll="ninth";
				$coll2="ninthfeedbacks";
				$coll3="ninthfeedbackanalysis";
			}
			else if($class=="10th")
			{
				$coll="tenth";
				$coll2="tenthfeedbacks";
				$coll3="tenthfeedbackanalysis";
			}
			$database='alphonsa_school';
			/*Inasert feedback into database*/
			try
			{
				$m = new Mongo('localhost');
			}
			catch(Exception $e)
			{
				  die('Error connecting to MongoDB server');	
			}
			$db=$m->$database;
			$collection = $db->$coll2;
			$query=array('subject' =>$sub);
			
			$document=array("subject"=>$sub,"que1"=>$ans[0],"que2"=>$ans[1],"que3"=>$ans[2],"que4"=>$ans[3],"que5"=>$ans[4],"que6"=>$ans[5],"que7"=>$ans[6],"que8"=>$ans[7],"que9"=>$ans[8],"que10"=>$ans[9],"que11"=>$ans[10]);
			$collection->insert($document);
			
			$feedback_count=$collection->count($query);
			$cursor=$collection->find($query);
			/*storing feedback analysis info*/
			$ans_never[]=array();
			$ans_attimes[]=array();
			$ans_often[]=array();
			$ans_alwayas[]=array();
			for($i=0;$i<sizeof($ans)-2;$i++)
			{
				$ans_never[$i]=0;
				$ans_attimes[$i]=0;
				$ans_often[$i]=0;
				$ans_always[$i]=0;
			}
			$names=array("que1","que2","que3","que4","que5","que6","que7","que8","que9");
			foreach($cursor as $document)
			{
				for($i=0;$i<sizeof($ans)-2;$i++)
				{
					$temp=$document[$names[$i]];
					if($temp=="Never")
					{
						$tmp=$ans_never[$i];
						$ans_never[$i]=$tmp+1;
					}
					else if($temp=="Attimes")
					{
						$tmp=$ans_attimes[$i];
						$ans_attimes[$i]=$tmp+1;
					}
					else if($temp=="Often")
					{
						$tmp=$ans_often[$i];
						$ans_often[$i]=$tmp+1;
					}
					else if($temp=="Always")
					{
						$tmp=$ans_always[$i];
						$ans_always[$i]=$tmp+1;
					}
				}
			}
			$collection = $db->$coll3;
			$collection->remove(array('subject' =>$sub), array("justOne" => true));
			$que_ans[]=array();
			for($i=0;$i<sizeof($ans)-2;$i++)
			{
				$que_ans[$i]=array("never"=>$ans_never[$i],"attimes"=>$ans_attimes[$i],"often"=>$ans_often[$i],"always"=>$ans_always[$i]);
				
			}
			$document2=array("subject"=>$sub,"que1"=>$que_ans[0],"que2"=>$que_ans[1],"que3"=>$que_ans[2],"que4"=>$que_ans[3],"que5"=>$que_ans[4],"que6"=>$que_ans[5],"que7"=>$que_ans[6],"que8"=>$que_ans[7],"que9"=>$que_ans[8]);
			$collection->insert($document2);
			/*actual analysis*/
			$query=array('subject' =>$sub);
			$obj=$collection->findone($query);
			$options=array("never","attimes","often","always");
			$filename=$sub.'.pdf';
			$path='c:/xampp/htdocs/asm/feedbacks/'.$class.'/'.$sub.'/';
			$final_path=$path.$filename;
			$exists=file_exists($path.$filename);
			
			$path = 'c:xampp\htdocs\extlib\fpdi';
   		    $oldPath = set_include_path(get_include_path() . PATH_SEPARATOR . $path);
			
			$counter=1;
			$r=array(255,255,255,0);
			$g=array(0,153,0,255);
			$b=array(0,0,255,0);
			
			require_once('fpdf.php'); 
			require_once('fpdi.php'); 
			$pdf = new FPDI(); 
			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial'); 
			$pdf->Cell(40,10,"Class:".$class."\t"."Subject:".$sub);
			$pdf->Ln();
			$pdf->Cell(40,10,"no of feedbacks:".$feedback_count);
			$pdf->Ln();
			for($i=0;$i<sizeof($ans)-2;$i++,$counter++)
			{
				$temp_array=$obj[$que[$i]];
				$attimes_value=$temp_array['attimes'];
				$often_value=$temp_array['often'];
				$always_value=$temp_array['always'];
				$avg_value=(($attimes_value*1)+($often_value*2)+($always_value*3))/sizeof($options);
				$pdf->SetTextColor(0,0,0);
				$pdf->Cell(40,10,$counter.".".$questions[$i]);
				$pdf->Ln();
				for($j=0;$j<sizeof($options);$j++)
				{
				  $value=$temp_array[$options[$j]];
				  $per=($value/$feedback_count)*100;
				  $per=number_format($per,2);
				  $pdf->SetTextColor($r[$j],$g[$j],$b[$j]);				  
				  $pdf->Cell(40,10,"no of ".$options[$j]." votes=".$value." (".$per."%)");
				  $pdf->Ln();
			    }
				$pdf->SetTextColor(0,0,255);
				$pdf->Cell(40,10,"Average Value:".$avg_value);
				$pdf->Ln();
			}
			$pdf->SetTextColor(0,0,0);
			$pdf->Ln();
			$pdf->Cell(40,10,"10.Difficult topic(s)");
			$pdf->Ln();
			$collection = $db->$coll2;
			$query=array('subject' =>$sub);
			$cursor=$collection->find($query);
			foreach($cursor as $document)
			{
				$dt=$document["que10"];
				$pdf->Cell(40,10,$dt);
				$pdf->Ln();
			}
			$pdf->Cell(40,10,"11.Comments/Suggestion");
			$pdf->Ln();
			$collection = $db->$coll2;
			$query=array('subject' =>$sub);
			$cursor=$collection->find($query);
			foreach($cursor as $document)
			{
				$cmt=$document["que11"];
				$pdf->Cell(40,10,$cmt);
				$pdf->Ln();
			}
			$pdf->Output($final_path, 'F');

			
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
			if(isset($_SESSION['username']))
			{
				$unm=$_SESSION['username'];
			}
			$query=array('username' =>$unm);
			$obj =$collection->findOne($query);
			$obj[$sub]='true';
			$collection->save($obj);
			
		?>
            <div id="container">
    	<p>Thank you for your feedback...</p>
        
   		 </div>
            <?php
		}
		
		else
		{
			
		  $subject=$_GET['subject'];
		  $_SESSION['subject']=$subject;
		}
		
		
	  ?>