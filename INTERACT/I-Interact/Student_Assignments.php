<?php
include('mysql.php');
session_start();
if(isset($_SESSION['student_id'])){
$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;
$query="SELECT * FROM StudentDetails WHERE student_id='$student_id'";
$result=mysqli_query($link,$query);
$r=mysqli_fetch_array($result);
$branch=$r[5];
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <style type="text/css">
    .top{
      position: fixed;
      width: 600px;
      top:20px;
      left:70px;
    }
    h1{
      color: blue;
      text-align: center;
    }
    
  </style>
  <script>
  function validate(){
  	var v=document.getElementById('uploadedimage').value;
    
    if(v=="") alert("No file is selected");
  	else{
  	var extension=v.substr(v.length - 4);
  	if(extension==".pdf"||extension==".zip"||extension==".tar"||extension==".txt"||extension==".jpg"||extension==".png"){
      var faculty=document.getElementById('faculty').value;
      var subject=document.getElementById('subject').value;
      var assignment=document.getElementById('assignment').value;
      //alert(faculty+"\t"+subject);
      if(faculty!=""&&subject!=""&&assignment!="")
  		    document.getElementById("imageForm").submit();
      else
        alert("Please choose your faculty and subject names");  
  	}
  	else{
  		alert("Please choose appropriate file")
  	 }
    }
  }

  </script>
  	
</head>
<body class="container ">
              <?php
                    $query="SELECT * FROM FacultyDetails WHERE department='$branch'";
                      $result=mysqli_query($link,$query);
                      //die(mysql_error());
              ?>
            
            <div class="col-lg-offset-2 col-lg-8 well">
            <form id="imageForm" action="saveAssignment.php" method="post" enctype="multipart/form-data">
                <div class="col-lg-2">
                <h1><b>Assignments</b></h1>
                <table align="center" border="0">
                <tr><td><br>
                <select id="faculty" name="faculty" class="form-control">
                		<option value="">Select your faculty</option>
                		<?php
                      while($row=mysqli_fetch_array($result)){
                      echo "
                          <option value='$row[1]'>$row[2]</option>
                        ";

                          }

                    ?>
                </select>
                  </td>
                  
                </tr>
                <tr><td><br>
                <select id="subject" name="subject" class="form-control"><!-- take subjects from table !-->
                <?php
                    $sub="SELECT * FROM subjects WHERE branch='$branch'";
                    echo "<option value=''>Select your subject</option>";
                    $subs=mysqli_query($link,$sub);
                    while ($sss=mysqli_fetch_array($subs)) {
                     echo "<option value='$sss[2]'>$sss[2]</option>";
                    }

                		
                		

                    ?>
                </select>
                    </td>
                </tr>
                <tr><td><br>
                <select id="assignment" name="assignment" class="form-control"><!-- take subjects from table !-->
                    <option value="">Select your assignment</option>
                    <option value="assignment1">Assignment1</option>
                    <option value="assignment2">Assignment2</option>
                    <option value="assignment3">Assignment3</option>
                    <option value="assignment4">Assignment4</option>
                </select>
                 </td>
                </tr>
                <tr><td><br>
                <input type="file" id="uploadedimage" name="uploadedimage" value="Choose file"><sub> Choose your assignment only jpg,zip,tar,pdf files are acceptable</sub><br><br>
                <button type="button" name="button" class="btn btn-primary" id="button" onClick="validate();">Upload</button>
                 </td>
                </tr>
            </form>
            
            <div class="col col-md-offset-1 col-md-10"><br>
            <tr><td>
            <b> <br>
            <!-- <a href="viewAssignments.php"><button class="btn btn-info"> View</button></a> -->
            <form action="Student_Assignments.php" method="post">
              Your submisions: <button type="submit" class="btn btn-info">View</button>
            </form>
            </b>
            </td>
            </tr>
            </table></div>
            <br><br>

<?php
if($_SERVER['REQUEST_METHOD']== "POST"){



$query="SELECT * FROM assignment WHERE   student_id='$student_id'";
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
    <th>Assignment</th>

    <th>Submited date</th>
    <th>Marks</th>

  </thead><tbody>

  ";
  while($row=mysqli_fetch_array($result)){

    echo "<tr>";
          $q="SELECT * FROM FacultyDetails WHERE   faculty_id='$row[2]'";
          $r=mysqli_query($link,$q);
          $q=mysqli_fetch_array($r);
          echo "
          <td>$q[2]</td>
          <td>$row[3]</td>
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
            </div>


        </div>
    </div>
</div>
</body>
</html>
<?php
}
else{
  header("Location:index.php");
}
?>