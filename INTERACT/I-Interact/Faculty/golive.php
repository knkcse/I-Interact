<?php
session_start();
$student_id=$_GET['id'];
$_SESSION['student_id']=$student_id;
header("Location:Chat.php");


?>