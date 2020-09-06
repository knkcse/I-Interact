<?php
include("mysql.php");
session_start();
if(isset($_SESSION['faculty_id'])){
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;
$i=1;
$j=1;
?>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
$content=$_POST['question'];
//echo $content;
//For question count
$q="SELECT * FROM Question WHERE id='$faculty_id'";
$r=mysqli_query($link,$q);
$count=mysqli_num_rows($r);

$count=$count+1;
//echo $count;
//echo $_POST['count'];
$query="INSERT INTO Question (id,question,date,count) VALUES('$faculty_id','$content',NOW(),$count)";
$result=mysqli_query($link,$query);
if($result){
	header("Location:Q_A.php");
}

}
?>
<html>
<head>
    <title>I-Interact</title>
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
     <!-- <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

    <script src="lib/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="lib/css/css.css">
    <style type="text/css">
    	#position{
    		position: relative;
    		top:80px;
    		width: 100px;
    	}

    	#td{
    		border: none;
    	}
    	b{
    		color:blue;
    	}
    	i{
    		color:black;
    		text-align: right;
    		position: relative;
    		left:350px;
    	}
    	html, body {
    overflow-x: hidden;
}
    </style>
    <script type="text/javascript">
    	function checkQuestion(){
    		//alert("Naveen "+id);
    		
    		if(document.getElementById('question').value!=""){
    					
    				document.getElementById('form').submit();
    		}
    		else{
    			alert("Please enter your question");
    		}
    	}
    	function postAns(id,i,qsn){
    		//alert(qsn);
    		if(document.getElementById('question'+qsn).value!=""){
    			var ans=document.getElementById('question'+qsn).value;
    			var faculty_id=id;
    			window.location.href = "saveAns.php?question_id=" + faculty_id + "&ans=" + ans+"&qno="+qsn;
    			
    		}
    		else{
    				//var str = new String("You can not submit an empty ansert");
    				//str=str.fontcolor( "red" );

					alert("You can't submit an empty answer");
    		}
    	}
    </script>

</head>
<body class="container well">
	<div >
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8 ">
			<h3>Ask a Question</h3>	
			<form id="form" name="form" action="Q_A.php" method="post">
				<table class="table " width="30%" align="center" >
					<tr>
						<td><input type='hidden' name='count' value='$j'></td>
						<td><textarea id="question" class="form-control" rows="4" cols="8" name="question" placeholder="Type your question"></textarea></td>
						<td><button type="button" class="btn btn-sm btn-defaul" id="position" onclick="checkQuestion()">ASK</button></td>
					</tr>


				</table>
			</form>
			</div>
		</div>
		
			
			
				<div class="col-lg-offset-2 col-lg-8 ">
				<h4><b>Recently asked questions</b></h4>
				<table class="table">
					<tr>
						<td >
							<?php
							    	$query="SELECT * FROM  Question order by date DESC";
							    	$result=mysqli_query($link,$query);
							    	if(mysqli_num_rows($result)!=0){
							    		echo "";
							    		echo "<table>";
							    		while($row=mysqli_fetch_array($result)){
							    				$qns=$row[1];
							    				if($qns[0]=='R'||$qns[0]=='r'){
							    					$q1="SELECT * FROM FacultyDetails WHERE faculty_id='$row[1]'";

							  						$rr1=mysqli_query($link,$q1);
							  						$row4=mysqli_fetch_array($rr1);
							  						echo "<tr><td>$i. <img src='$row4[8]' width='30px' height='30px'/>&nbsp;&nbsp;&nbsp;<b>$row4[2]</b> asks $row[2]<br><br>";
							    					
							    				}
							    				else
							    					{
							    						$q1="SELECT * FROM StudentDetails WHERE student_id='$row[1]'";

							  						$rr1=mysqli_query($link,$q1);
							  						$row4=mysqli_fetch_array($rr1);
							  						echo "<tr><td>$i. <img src='../I-Interact/$row4[10]' width='30px' height='30px'/>&nbsp;&nbsp;&nbsp;<b>$row4[2]</b> asks $row[2]<br><br>";
							    					}
							    				echo "<button type='button' class='btn btn-warning' data-toggle='collapse' data-target='#demo$i'>View Answers</button><br><br>
							  <div id='demo$i' class='collapse well'><br><br> "?>
							  
							  <?php
							  		$query1="SELECT * FROM Question_Answers WHERE id='$row[1]' and count=$row[0] order by date DESC";
							  		$result2=mysqli_query($link,$query1);
 							  		if(mysqli_num_rows($result2)!=0){
							  			while($r=mysqli_fetch_array($result2)){
							  				//if($r[1]==$s_id){
							  				//	echo "<i>$r[2] <b>$r[1]</b> </i><hr>";
							  				//}
							  				//else{
							  					
							  					//echo "<b>$r[1]</b>'s answer is   $r[2]<hr>";
							  			//	}
							  				$c=$r[1];
							  					if($c[0]=='R'||$c[0]=='r'){
							  						$q1="SELECT * FROM FacultyDetails WHERE faculty_id='$r[1]'";

							  						$rr1=mysqli_query($link,$q1);
							  						$row4=mysqli_fetch_array($rr1);
							  						//echo $row4[8];
							  						echo "<img src='$row4[8]' width='30px' height='30px'/>&nbsp;&nbsp;&nbsp;<b>$row4[2]</b>'s answer is $r[2]<br><br>";


							  					} 
							  					else{

							  						$q1="SELECT * FROM StudentDetails WHERE student_id='$r[1]'";

							  						$rr1=mysqli_query($link,$q1);
							  						$row4=mysqli_fetch_array($rr1);
							  						//echo $row4[8];
							  						echo "<img src='../I-Interact/$row4[10]' width='30px' height='30px'/>&nbsp;&nbsp;&nbsp;<b>$row4[2]</b>'s answer is $r[2]<br><br>";
							  					}
							  				
							  			}


							  		}

							  ?>

							  <!-- Problem is that if i want to send ans for a person then i need to set his id in session id but im getting only last id of the list -->
							 <?php echo " 
							   
							  


							  </div><br> 
							  <form name='form1' id='form1' action='' method='post'>";?><?php echo "
						
							  <button type='button' class='btn btn-warning' data-toggle='collapse' data-target='#answer_this_question$row[0]'>Aswer this Question</button>
							  <div id='answer_this_question$row[0]' class='collapse'><br>
							   	
							    <textarea id='question$row[0]' class='form-control' rows='4' cols='50' name='question$row[0]' placeholder='Type your answer here...'></textarea>
							    <button type='button' class='btn btn-sm btn-success'  onclick='postAns(\"$row[1]\",\"$row[4]\",\"$row[0]\")' style='position: relative;top:10px;'>Post</button>
							    </form>
							    <br>
							  </div>


							  <hr></td></tr>";$i++; 
							    				
							    		}
							    		echo "</table>";

							    	}
							    	


							    ?>
						</td>
					</tr>
					<!--<tr>	
						<td id="td">
							<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#demo">View Answers</button>
							  <div id="demo" class="collapse"><br>
							   Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 	consequat.<br> 




							  </div>
						</td>
					</tr>
					<tr>	
						<td id="td">
								
						<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#answer_this_question">Aswer this Question</button>
							  <div id="answer_this_question" class="collapse"><br>
							   
							    <textarea id="question" class="form-control" rows="4" cols="50" name="question" placeholder="Type your answer"></textarea>
							    <button type="button" class="btn btn-sm btn-success"  onclick="checkQuestion()" style="position: relative;top:10px;">Post</button>
							    <br>
							  </div>
						</td>
						
					</tr>-->
				</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-off-8 col-lg-3">
			<h4><i >I-Interact &copy; 2017</i></h4>
			</div>
		</div>

	</div>


</body>
</html>

<?php

}
else{
	header("Location:index.php");
}
?>
