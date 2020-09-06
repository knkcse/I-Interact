<?php
$student_id=$_GET['username'];
$password=$_GET['password'];
//echo $student_id.$password;
include('mysql.php');
$query="SELECT * FROM StudentDetails WHERE student_id='$student_id' AND password='$password'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);
if($count==0){
		echo "invalid";

}
else{
	echo "valid";
}
?>