<?php

include('mysql.php');
session_start();
if(isset($_SESSION['faculty_id'])){

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="lib/css/requiredCSS.css">
  </head>
 <!-- <style type="text/css">
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
  </style> -->
  <body>

<?php


$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;
//For student details
$query="SELECT * FROM FacultyDetails WHERE  faculty_id='$faculty_id'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);

$query="INSERT INTO DebateRegister(id,name,branch,date,winner) VALUES('$faculty_id','$row[2]','$row[5]',NOW(),'-')";
$result=mysqli_query($link,$query);
if($result){
		echo "<center><div class=' col-md-offset-3 col-md-6 well'>
				<h3>You have registered successfully</h3>
				<b>Please wait redirecting...</b>
	</div></center>";
	echo "
<script>
    setTimeout(function(){
       window.location='checkDebateRegistrationLimit.php';
    }, 5000);
</script>
	";
}
else{
		echo "<center>
		<div class=' col-md-offset-3 col-md-6 well'>
				<span>You have already registered</span><br>
				<b>Please wait redirecting...</b>
		</div></center>

	 ";
	 echo "
<script>
    setTimeout(function(){
       window.location='checkDebateRegistrationLimit.php';
    }, 5000);
</script>
	";
}


?>
<?php
}
else{
  header("Location:index.php");
}
?>