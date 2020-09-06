<!DOCTYPE html>
<html>
<head lang='en'>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
  <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/css/requiredCSS.css\">
  </head>
  <style type='text/css'>
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
  </style> 
  <body>
<?php
include('mysql.php');
$identity=$_POST['identity'];
$sid=$_POST['sid'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$password=$_POST['p_password'];
$mobile=$_POST['mobile'];
$branch=$_POST['branch'];
if($identity=='student'){
		$class=$_POST['class'];
		
		$year=$_POST['year'];
		$path="./Profiles/default.png";
/*echo $sid.'<br>';
echo $name.'<br>';
echo $dob.'<br>';
echo $email.'<br>';
echo $password.'<br>';
echo $mobile.'<br>';
echo $identity.'<br>';
echo $branch.'<br>';
echo $year.'<br>';*/

$query="INSERT INTO StudentDetails(student_id,name,year,class,branch,gmail,dateOfBirth,mobile,password,path) VALUES('$sid','$name','$year','$class','$branch','$email','$dob','$mobile','$password','$path')";
$result=mysqli_query($link,$query);
if(mysqli_errno($link)!=1062){
echo "<br>
<div class=' col-md-offset-3 col-md-6 '>
        <center class='well'><h3>You have successfully register</h3><br>
        <b>Please wait redirecting...</b>

        </center>
        
     </div>   
</body>
</html>";
echo "
<script>
    setTimeout(function(){
       window.location='index.php';
    }, 5000);
</script>
	";

}
else{
echo "<br>
<div class=' col-md-offset-3 col-md-6 '>
        <center class='well'><span style='color:red'>Error!! Already registered with gmail or id<br>please visit admin</span><br>
        <b>Please wait redirecting...</b>

        </center>
        
     </div>   
</body>
</html>";
echo "
<script>
    setTimeout(function(){
       window.location='index.php';
    }, 5000);
</script>
	";
}
}
else{
/*
echo $sid.'<br>';
echo $name.'<br>';
echo $dob.'<br>';
echo $email.'<br>';
echo $password.'<br>';
echo $mobile.'<br>';
echo $branch.'<br>';*/
$path="./Profiles/default.png";
$query="INSERT INTO FacultyDetails(faculty_id,name,dob,gmail,password,department,mobile,path) VALUES('$sid','$name','$dob','$email','$password','$branch','$mobile','$path')";
$result=mysqli_query($link,$query);
if(mysqli_errno($link)!=1062){
echo "<br>
<div class=' col-md-offset-3 col-md-6 '>
        <center class='well'><h3>You have successfully register</h3><br>
        <b>Please wait redirecting...</b>

        </center>
        
     </div>   
</body>
</html>";
echo "
<script>
    setTimeout(function(){
       window.location='index.php';
    }, 5000);
</script>
  ";

}
else{
echo "<br>
<div class=' col-md-offset-3 col-md-6 '>
        <center class='well'><span style='color:red'>Error!! Already registered with gmail or id<br>please visit admin</span><br>
        <b>Please wait redirecting...</b>

        </center>
        
     </div>   
</body>
</html>";
echo "
<script>
    setTimeout(function(){
       window.location='index.php';
    }, 5000);
</script>
  ";
}
}
?>