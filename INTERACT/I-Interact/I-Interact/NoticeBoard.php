<?php
include('mysql.php');
session_start();
if(isset($_SESSION['student_id'])){
$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;

?>
<!DOCTYPE html>
<html>
<head lang='en'>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
  <link rel="stylesheet" type="text/css" href="lib/css/requiredCSS.css">
  </head>
  <style type="text/css">
    i{
      color: orange;
      opacity:0.8;

    }
    sub{
      color: brown;
      opacity: 0.8;
    }
    h2{
      text-align: center;
    }


  </style>
  <!--<style type='text/css'>
    span{
      color:red;
    }
    h2{
      color: green;
    }
    .top{
      position: absolute;
      top:100px;
    }
    i{
      color:brown;
    }
  </style> -->
  <body>
  <div class="container">
      <div class="row">
            <div class=" col-md-offset-2 col-md-8 well">
                 
                    <h2><b>NoticeBorad</b></h2>
                 <hr>
                 <div class="col-md-offset-1">
                 <table class="table" align="center" width="100%">
                 <?php

                  $query="SELECT * FROM NoticeBoard ORDER BY(date) DESC LIMIT 10";
                  $result=mysqli_query($link,$query);
                  $count=mysqli_num_rows($result);
                  if($count!=0){
                    while($row=mysqli_fetch_array($result)){
                      echo "
                        <i data-toggle='collapse' data-target='#$row[0]' style='cursor:pointer'><sub class='glyphicon glyphicon-plus'></sub> $row[2]</i><br>
                      <div id='$row[0]' class='collapse alert alert-success'>
                              $row[3]<br>";
                              if($row[4]!="NULL"){
                                    echo "find attachment <a href='$row[4]' download>Download</a>";

                              }
                      echo "        
                              
                              
                     </div><br>

                      ";  
                    }

                  }

                 ?>
                 </table>
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