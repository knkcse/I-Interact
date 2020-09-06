<?php
include('mysql.php');
session_start();
//$faculty_id='RCS111';
if(isset($_SESSION['faculty_id'])){
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;

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
  <script type="text/javascript">
    
  function checknotice(){

      var a=document.getElementById('notice').value;
      var b=document.getElementById('purpose').value;
     // alert(a);
      if(a==""||a==""){
            alert("Please enter your post");
      }
      else{
          document.getElementById('form').submit();
      }
  }

  </script>
  <body>
  <div class="container">
      <div class="row">
            <div class=" col-md-offset-2 col-md-8 well">
                 
                    <h2><b>NoticeBorad</b></h2>
                 <hr>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
$notice=$_POST['notice'];
$purpose=$_POST['purpose'];
//echo $notice;
//echo "Naveen";
$file_name=$_FILES["uploadedimage"]["name"];
if($file_name!=""){
$temp_name=$_FILES["uploadedimage"]["tmp_name"];
$file="../I-Interact/noticeboard/"."$faculty_id"."$file_name"; 

if(move_uploaded_file($temp_name,$file)){
  //echo "Enterd";
  $query="INSERT INTO NoticeBoard(id,purpose,notice,path_attachment,date) VALUES('$faculty_id','$purpose','$notice','$file',NOW())";
  $result=mysqli_query($link,$query);
  if($result){
      echo "
        <div class='alert alert-success alert-dismissable fade in'>Your notice is posted
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      "; 
  }
  else{
     echo "
        <div class='alert alert-danger alert-dismissable fade in'>Error!!! please post after sometime.
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      "; 
      //echo mysql_error();
  }
}
}
else{
 $query="INSERT INTO NoticeBoard(id,purpose,notice,path_attachment,date) VALUES('$faculty_id','$purpose','$notice','NULL',NOW())";
  $result=mysqli_query($link,$query);
   if($result){
      echo "
        <div class='alert alert-success alert-dismissable fade in'>Your notice is posted
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      "; 
  }
  else{
     echo "
        <div class='alert alert-danger alert-dismissable fade in'>Error!!! please post after sometime.
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      "; 

  }

}
//header("Location:NoticeBoard.php");
}
?>
<?php

}
else{
  header("Location:index.php");
}
?>

                  <form id="form" name="form" action="NoticeBoard.php" method="post" enctype="multipart/form-data">
          <table width="60%">
                <tr>
                    <td>Post Notice</td>
                    
                </tr>
                <tr>
                    <td><textarea id="purpose" class="form-control" rows="2" cols="3" name="purpose" placeholder="Type your purpose "></textarea></td>
                  </tr>
                <tr>
                    <td><br><textarea id="notice" class="form-control" rows="4" cols="3" name="notice" placeholder="Type your notice"></textarea></td>
                  </tr>
                  <tr>
                      <td><br>
                           <input type="file" id="uploadedimage" name="uploadedimage"><br><sub> choose attachments if any</sub><br><br>
                      </td>

                  </tr>  
                  <tr>
                   <td>&nbsp;<button type="button" class="btn btn-sm btn-info" id="position" onclick="checknotice()">Post</button></td>


                </tr>
          </table>


          </form><hr>


                 <div class="col-md-offset-1">
                 <table class="table" align="center" width="100%">
                 <?php

                  $query="SELECT * FROM NoticeBoard ORDER BY(date) DESC ";
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



           
     
 
<?php


?>

 </div>
 </div>
 </div>   
</body>
</html>