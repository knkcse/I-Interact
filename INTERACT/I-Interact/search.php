<?php
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
  <style type="text/css">
    #center{
      position: relative;
      left: 200px;
    }
    b{
      text-align: center;
    }
  </style>
 <!-- <style type="text/css">
    span{
      color:red;
    }
    h3{
      color: orange;
    }
    .top{
      position: absolute;
      top:100px;
    }
    b{
      text-align: center;
    }
    sub{
        color:orange  ;
        text-decoartion: blink;

    }
  </style>-->
  <body class="">
   <div class=' col-md-offset-3 col-md-6 well'>
   <h3>Student Details:</h3><hr>
<?php
$id=$_GET['id'];
//echo $id;
include('mysql.php');
$query="SELECT * FROM StudentDetails WHERE  name like '%$id%' OR  student_id like '%$id%'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);
 if($count==0){

    echo "<div class='col-md-offset-4'>
                <b>No, records found</b>
                  
            </div>";
           }
    else{
          echo "<div class='col-md-offset-0'>

            <table class='table table-bordered' >
            <thead>
                <tr>
                    <th>S.no</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Branch</th>
                    <th>Year</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>

            ";
            $i=1;
          while($row=mysqli_fetch_array($result)){

            echo "
                <tr>
                  <td>$i</td>
                  <td>$row[1]</td>
                  <td>$row[2]</td>
                   <td>$row[5]</td>
                  <td>$row[3]</td>
                  <td>$row[4]</td>

                </tr>


            ";$i++;

          }
          echo "</table>";
    }
?>
<hr>
<h3>Faculty Details</h3>
<?php
$query="SELECT * FROM FacultyDetails WHERE  name like '%$id%' OR  faculty_id like '%$id%'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);
 if($count==0){

    echo "<div class='col-md-offset-4'>
                <b>No, records found</b>
                  
            </div>";
           }
    else{
          echo "<div class='col-md-offset-0'>

            <table class='table table-bordered' >
            <thead>
                <tr>
                    <th>S.no</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gmail</th>
                    <th>Department</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody>

            ";
            $i=1;
          while($row=mysqli_fetch_array($result)){

            echo "
                <tr>
                  <td>$i</td>
                  <td>$row[1]</td>
                  <td>$row[2]</td>
                  <td>$row[3]</td>
                  <td>$row[5]</td>
                  <td>$row[6]</td>

                </tr>


            ";$i++;

          }
          echo "</table>";
    }
?>
<?php
}
else{
  header("Location:index.php");
}
?>