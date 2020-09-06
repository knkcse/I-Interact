<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="lib/css/requiredCSS.css">
  </head>
  <!--<style type="text/css">
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
include('mysql.php');
session_start();
$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;
$faculty_id=$_POST['faculty'];
$remark=$_POST['remark'];
$rating=$_POST['rating'];
//echo "Naveen".$student_id.$faculty.$remark.$rating;
$query="SELECT * FROM StudentDetails WHERE  student_id='$student_id'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($link,$result);


$query="INSERT INTO feedback(student_id,faculty_id,rating,remark,branch,date) VALUES('$student_id','$faculty_id',$rating,'$remark','$row[5]',NOW())";
$result=mysqli_query($link,$query);
if($result){
    echo "<div class='top col-md-offset-3 col-md-6 well'>
        <h3>Successfully submitted your assignment</h3>
        <b>Please wait redirecting...</b>
      </div>";
}
else{
  echo "
    <div class='top col-md-offset-3 col-md-6 well'>
        <span>Error! while uploading your assignment.</span><br>
        <b>Please wait redirecting...</b>
    </div>

   ";
}
echo "
<script>
    setTimeout(function(){
       window.location='FeedBack.php';
    }, 5000);
</script>
  ";


?>  
</body>
</html>