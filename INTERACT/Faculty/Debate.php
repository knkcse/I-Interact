<?php
session_start();
if(isset($_SESSION['faculty_id'])){
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;
echo "<!DOCTYPE html>
<html>
<head lang='en'>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
  <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/css/requiredCSS.css\">
  </head>
 <!-- <style type='text/css'>
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
   h1{
    text-align: center;
    color: blue;
}
  </style> -->
  <body>
  <div class='col col-md-offset-5'>

  
  </div>
  ";
include('mysql.php');
$query="SELECT * FROM DebateRegister WHERE id='$faculty_id'";
$result=mysqli_query($link,$query);
//echo $result.mysql_error();
$count=mysqli_num_rows($result);
if($count!=0){
    echo "<center><div class=' col-lg-offset-2 col-lg-8 well'>

        <h3>You have registered for the debate session</h3>
        <b>Please wait redirecting to debate session...</b>
     </div>   </center>
   ";
 echo "
<script>
    setTimeout(function(){
       window.location='checkDebateRegistrationLimit.php';
    }, 2000);
</script>
  ";
}
else{
echo "
 <center> <div class=' col-lg-offset-2 col-lg-8 well'>
        <h1><b>Go Deabate</b></h1> 
        <h3>Debate Link will be available soon</h3>
        <a href='checkDebateRegistrationLimit.php'> Click here to register</a>
        </div>
        </center>
  
  </body>
  </html>";

  echo "
    <br>
        Winner list here

    </div><br>

  ";
  }




  ?>
  <?php

}
else{
  header("Location:index.php");
}

  ?>