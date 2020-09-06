<?php
session_start();
if(isset($_SESSION['student_id'])){
$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;
$faculty_id=$_GET['faculty_id'];
$department=$_GET['department'];
echo $student_id.$faculty_id.$department;
$_SESSION['to_id']=$faculty_id;
$_SESSION['to_branch']=$department;
header("Location:Chat.php");
}

?>