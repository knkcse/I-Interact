<?php
session_start();
$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;

?>
<!DOCTYPE html>
<html>
<head lang='en'>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
  <link rel="stylesheet" type="text/css" href="lib/css/requiredCSS.css">
  </head>
  <!--<style type='text/css'>
    span{
      color:red;
    }
    h3{
      color: green;
    }
    .top{
      position: absolute;
      top:100px;
    }
    b{
      color:blue;
    }
     center{
      position: relative;
      top:150px;
    }
  </style> -->
  <body>
<div class=' col-md-offset-3 col-md-6 '>
        <center class='well'><h3>You have stoped your debate session now</h3></center>
        
     </div>   
</body>
</html>