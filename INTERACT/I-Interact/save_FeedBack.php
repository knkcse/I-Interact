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
  	center{
      position: relative;
      top:150px;
    }
  </style> -->
  <body>
  <div >


<?php 
$bool=true;

$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;
$faculty_id=$_POST['faculty'];
$remark=$_POST['remark'];
$rating=$_POST['rating'];
//echo "Naveen".$student_id.$faculty.$remark.$rating;

$query="SELECT * FROM StudentDetails WHERE  student_id='$student_id'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
//TO check whether he/she has given feedback or not
//echo $faculty_id;
$query="SELECT * FROM feedback WHERE student_id='$student_id' AND faculty_id='$faculty_id' AND branch='$row[5]'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);
//echo $count;
if($count!=0){
while ($record=mysqli_fetch_array($result)) {
	$date=$record[6];
	//echo $date;
	$d=date($date);
	//echo $d.'<br>';
	$dd=date('Y-m').'-3';
	//echo $dd.'<br>';
	$date1=date_create($d);
	$date2=date_create($dd);
	$diff=date_diff($date1,$date2);
	$now=$diff->format("%R%a days");
	//echo $now;
	if($now==0||$now==1||$now==2){
		$bool=false;
		break;
	}
	
}
}

if($bool){
//echo "Enterd";
$qw="SELECT * FROM feedback WHERE student_id='$student_id' AND faculty_id='$faculty_id'";
//echo $qw.'<br>';
$rr=mysqli_query($link,$qw);
//echo $rr;
$ccc=mysqli_num_rows($rr);
//echo $ccc;
if($ccc==0){
$query="INSERT INTO feedback(student_id,faculty_id,rating,remark,branch,date) VALUES('$student_id','$faculty_id',$rating,'$remark','$row[5]',NOW())";
$result=mysqli_query($link,$query);
if($result){
		echo "
			<center><div class=' col-md-offset-3 col-md-6 well'>
				<h3>Successfully submitted your feedback</h3>
				<b>Please wait redirecting...</b>
			</div></center>";
}
else{
	echo "<center>
		<div class=' col-md-offset-3 col-md-6 well'>
				<span>Error! You have already submitted your feedback</span><br>
				<b>Please wait redirecting...</b>
		</div></center>

	 ";
}
}
else{
  echo "<center>
    <div class=' col-md-offset-3 col-md-6 well'>
        <span>Error! You have already submitted your feedback</span><br>
        <b>Please wait redirecting...</b>
    </div></center>

   ";
}
}
else{
	echo "<center>
    <div class=' col-md-offset-3 col-md-6 well'>
        <span>Error! You have already given feedback.</span><br>
        <b>Please wait redirecting...</b>
    </div></center>

   ";
	}

echo "
<script>
    setTimeout(function(){
       window.location='FeedBack.php';
    }, 3000);
</script>
	";

?>  
</div>
</body>
</html>
<?php
}
else{
  header("Location:index.php");
}
?>



