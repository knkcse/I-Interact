<?php 
session_start();
if(isset($_SESSION['student_id'])){
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
.loader {
  border: 6px solid #f3f3f3;
  border-radius: 50%;
  border-top: 6px solid green;
  border-right: 6px solid green;
  border-bottom: 6px solid green;
  border-left: 6px solid gray;
  width: 20px;
  height: 20px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.top{
	position: relative;
	top: 200px;
}
b{
	color: blue;
}
</style>
</head>
<body>
<div class="row">
<div class="col-md-offset-4 col-md-4 well top">
<center><h2><b>I-Interact</b></h2></center>
<?php
/**
 * Created by PhpStorm.
 * User: asshu
 * Date: 5/8/16
 * Time: 10:54 PM
 */

$student_id=$_SESSION['student_id'];
if($student_id) {
	setcookie( "id", "", time()- 60, "/","", 0);
  session_destroy();
	echo "<center> Logging out <div class='loader'></div></center>";
	echo "
<script>
    setTimeout(function(){
       window.location='index.php';
    }, 2000);
</script>
	";
    
   
}
else{
	
    
}
?>
</body>
</html>
<?php
}
else{
  header("Location:index.php");

}
?>