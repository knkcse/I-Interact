<?php

include("mysql.php");
session_start();
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;
$question_id=$_GET['question_id'];
//$count=$_GET['count'];
$ans=$_GET['ans'];
$qno=$_GET['qno'];
//die($qno);
$answer_id=$_SESSION['faculty_id'];
$query="INSERT INTO Question_Answers(id,aid,answer,date,count) VALUES('$question_id','$answer_id','$ans',NOW(),$qno)";
$result=mysqli_query($link,$query);
if($result){
	header("location:Q_A.php");
}
else{
	//Have to insert error file
}
?>