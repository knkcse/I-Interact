<?php
include('mysql.php');
session_start();
$faculty_id=$_SESSION['faculty_id'];
$student_id=$_SESSION['student_id'];
$subject=$_SESSION['subject'];
$assignment=$_SESSION['assignment'];
$_SESSION['faculty_id']=$faculty_id;
//echo $student_id.'<br>';
//echo $subject.'<br>';
//echo $assignment.'<br>';
//echo $faculty_id.'<br>';
$query="SELECT * FROM assignment WHERE student_id='$student_id' and assignment='$assignment' and subject='$subject'";
$result=mysqli_query($link,$query);

//echo mysql_error();
$row=mysqli_fetch_array($result);
//echo $row[7];
?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <style type="text/css"></style>
</head>
<body class="container ">
	<div class="col-lg-offset-2 col-lg-8 well">
	<?php
		$str=$row[7];
		$str="../I-Interact/".$str;

		$str1=substr($str, -3);
		if($str1=="zip"||$str1=="tar"){
			//for coming to student fodler
			echo "Find attachment <a href='$str' download>Download</a>";
			
				
		}
		else{	
		echo "<iframe src='$str' width=660px height=288px></iframe>";
		}

	?>
	<form name="form" action="giveMarksForAssignment.php" method="post">	
	<table width="60%">

	<tr>
		<td>
		<b>Give marks to student:</b>
		</td>
		<td>
		<select class="form-control" name="marks">
			<option value="1">1 out of 10</option>
			<option value="2">2 out of 10</option>
			<option value="3">3 out of 10</option>
			<option value="4">4 out of 10</option>
			<option value="5">5 out of 10</option>
			<option value="6">6 out of 10</option>
			<option value="7">7 out of 10</option>
			<option value="8">8 out of 10</option>
			<option value="9">9 out of 10</option>
			<option value="10">10 out of 10</option>
		</select>
		</td>
		<td>&nbsp;&nbsp;&nbsp;<button type="submit " class="btn btn-success" name="submit" value="submit">Give marks</button></td>
		</tr>
		<tr>
			
			<td></td>
			<td>&nbsp;</td>
			
			
		</tr>
		<tr>
			<td><br><a href="Student_Assignments.php"><button type="button" class="btn btn-info">Back to List</button></a></td>
			
			<td><br><button type="submit " class="btn btn-warning" name="submit" value="display">Show marks List</button></td>

		</tr>
		
	</table>	
	</form><br>

<?php
if($_SERVER['REQUEST_METHOD']== "POST"&&$_POST['submit']=='submit'){

$marks=$_POST['marks'];
$query="SELECT * FROM assignment WHERE student_id='$student_id' and subject='$subject' and assignment='$assignment'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
//echo $row[9];
//echo $marks;
if($row[9]!='-'){
		echo "
        <div class='alert alert-danger alert-dismissable fade in'>Error!!! Marks alredy given to this student
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      "; 
}
else{
$query="UPDATE assignment set marks='$marks' WHERE student_id='$student_id' and subject='$subject' and assignment='$assignment'";
$result=mysqli_query($link,$query);
echo "
        <div class='alert alert-success alert-dismissable fade in'>Marks are given
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      "; 
      
}

}
else if($_SERVER['REQUEST_METHOD']== "POST"&&$_POST['submit']=='display'){
$query="SELECT * FROM assignment WHERE   faculty_id='$faculty_id'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);
if($count==0){
    echo "<b>No assignment</b>";
}
else{
  echo "<table class='table'>
  <thead> 
    <th>Faculty</th>
    <th>Subject</th>
    <th>Class</th>
    <th>Assignment</th>

    <th>Submited date</th>
    <th>Marks</th>

  </thead><tbody>

  ";
  while($row=mysqli_fetch_array($result)){

    echo "<tr>";
          
          echo "
          <td>$row[2]</td>
          <td>$row[3]</td>
          <td>$row[4]</td>
          <td>$row[8]</td>
          <td>$row[6]</td>
          
          <td>$row[9]</td>
    </tr>
    ";
  }
  echo "</tbody></table>";
}

}

?>
	</div>
</body>
</html>