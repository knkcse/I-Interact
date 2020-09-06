<?php

session_start();
if(isset($_SESSION['faculty_id'])){
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;
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
      position: relative;
      left: 50px;
    }
    sub{
      opacity:0.6;
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
            <table align="center">
            <tr>
            <td>
            
            <h2><b>The NextDebate session <br>&nbsp;&nbsp;&nbsp;will go Live at 8:PM</b></h2>
           
            </td>
            </tr>
            <tr>
            <td>
            
                <h3>To participate in next session register here</h3><br>
           
            </td>
            </tr>
            <tr>
            <td style="position: relative;left: 140px;">
            
                <a href="RegisterSession.php"><button type="button" class="btn btn-success" name="submit" id="submit">Register here!</button></a><br>
                <sub>Only 15 members for a session</sub>

            </td></tr>
            <tr>
            <td style="position: relative;left: 70px;">
            <br>
                <form id="form" name="form" action="RegisterDebate.php" method="post">    
                    <button type="submit" class="btn btn-info" name="submit" id="submit">List of Registered students for session</button>
                </form>

            
            </td>
            </tr>
            </table><br><hr><br>

  
  <?php
  if($_SERVER['REQUEST_METHOD']== "POST"){

    include('mysql.php');
    $yesterday=date('Y-m-d',strtotime("-1 days"));
    $today=date('Y-m-d');

    $query="SELECT * FROM DebateRegister WHERE (date='$yesterday' OR date='$today')";
    $result=mysqli_query($link,$query);
    $count=mysqli_num_rows($result);
    if($count==0){

    echo "<div class='col-md-offset-4'>
                <b>No, one registered yet</b>
                  
            </div>";
           }
    else{
          echo "<div class='col-md-offset-0'>

            <table class='table' >
            <thead>
                <tr>
                    <th>S.no</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Branch</th>
                    <th>Registered date</th>
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
                  <td>$row[4]</td>

                </tr>


            ";$i++;

          }
    }        

  }


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