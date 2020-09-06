<?php
$student_id=$_GET['username'];
//echo $student_id.$password;
include('mysql.php');
$query="SELECT * FROM StudentDetails WHERE student_id='$student_id' OR gmail='$student_id'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);
if($count==0){
		echo "invalid";

}
else{
	echo "valid";
}
?>