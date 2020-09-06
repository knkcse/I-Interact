<?php
include('mysql.php');
session_start();
if(isset($_SESSION['student_id'])){
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
 <!--  <style type="text/css">
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
  <body class="container">
<?php

$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;
$faculty_id=$_POST['faculty'];
$subject=$_POST['subject'];
$assignment=$_POST['assignment'];
$file_name=$_FILES['uploadedimage']['name'];
$temp_name=$_FILES['uploadedimage']['tmp_name'];
$file="./StudentAssignments/"."$assignment"."$file_name";	

//Checking for submission before
$query="SELECT * FROM assignment WHERE student_id='$student_id' AND faculty_id='$faculty_id' AND assignment='$assignment' AND subject='$subject'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($link,$result);
if($count==0){


//echo "Ented";

//For student details
$query="SELECT * FROM StudentDetails WHERE 	student_id='$student_id'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($link,$result);



if(move_uploaded_file($temp_name,$file)){
  //echo "Enterd";
	$query="INSERT INTO assignment(student_id,faculty_id,subject,class,year,date,path,assignment) VALUES('$student_id','$faculty_id','$subject','$row[4]','$row[3]',NOW(),'$file','$assignment')";
	
	$result=mysqli_query($link,$query);
  echo mysqli_error($link);
  if($result){
	echo " <center><div class='col-lg-offset-2 col-lg-8 well'>
        
				<h3>Successfully submitted your assignment</h3>
				<b>Please wait redirecting...</b>
       
	</div> </center>";
    }
   else{
     echo "<center>
    <div class='col-lg-offset-2 col-lg-8 well'>
      
        <span>Error! you have alerady submited your assignment. Please check your status</span><br>
        <b>Please wait redirecting...</b>
        
    </div></center>

   ";
   } 

}
else{
	echo "
		<center><div class=' col-lg-offset-2 col-lg-8 well'>
				<span>Error! while uploading your assignment.</span><br>
				<b>Please wait redirecting...</b>
        
		</div></center>

	 ";
	
}
}
else{

  echo "
    <center> <div class='col-lg-offset-2 col-lg-8 well'>
       <span>Error! You have submitted already. Please check your view status</span><br>
        <b>Please wait redirecting...</b>
        
    </div></center>

   ";
}

	echo "
<script>
    setTimeout(function(){
       window.location='Student_Assignments.php';
    }, 5000);
</script>
	";
	
?>
<?php
}
else{
  header("Location:index.php");
}
?>