<?php
$faculty_id=$_GET['username'];
$password=$_GET['password'];
//echo $faculty_id.$password;
include('mysql.php');
$query="SELECT * FROM FacultyDetails WHERE faculty_id='$faculty_id' AND password='$password'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);
//echo $query.$result.$count;
if($count==0){
		echo "invalid";

}
else{
	echo "valid";
}
?>