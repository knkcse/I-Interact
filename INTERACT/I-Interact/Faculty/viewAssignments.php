<?php
session_start();
$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;
include('mysql.php');
$query="SELECT * FROM StudentDetails WHERE 	student_id='$student_id'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0){
		echo "No assignment";
}
else{
	while($row=mysql_fetch_array($result)){
		echo "$row[1]  $row[2] $row[10]";
		echo "<img src='$row[10]' width='100px' height='100px'><br>";
	}
}


?>