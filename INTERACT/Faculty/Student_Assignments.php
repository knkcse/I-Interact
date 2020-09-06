<?php
include('mysql.php');
session_start();
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;
$query="SELECT * FROM assignment WHERE faculty_id='$faculty_id'";
$result=mysqli_query($link,$query);
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
</head>
<body class="container ">
<div class="col-lg-offset-2 col-lg-8 well">
      <h1><b>Assignments</b></h1>
      <hr>
      <?php 
        $count=mysqli_num_rows($result);
        if($count!=0){

      ?>
      <table class="table">
        <thead>
            <th>
                Student ID:
            </th>
            <th>
                Subject:
            </th>
            <th>
                Class:
            </th>
            <th>
                Assignment:
            </th>
            <th>
                Year:
            </th>
            <th>
                Date of submission:
            </th>

        </thead>
        <?php
          while($row=mysqli_fetch_array($result)){

            echo "<tr>
                  <td><a href='gotoMarks.php?id=$row[1]&assignment=$row[8]&subject=$row[3]'><sub class='glyphicon glyphicon-plus'></sub> $row[1]</a></td>
                  <td>$row[3]</td>
                  <td>$row[4]</td>
                  <td>$row[8]</td>
                  <td>$row[5]</td>
                  <td>$row[6]</td>
                  </tr>



            ";
          }


        ?>
      </table>
      <?php
        }
        else{
            ?>
            <b>No assignments</b>
            <?php
        }
      ?>
              
            
</div>
</body>
</html>
