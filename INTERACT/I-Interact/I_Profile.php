<?php
session_start();
if(isset($_SESSION['student_id'])){
$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;
?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="lib/css/requiredCSS.css">
  <style type="text/css">
    td
{
  padding-top: 10px;
  padding-bottom:10px;
  float: left;
  color: orange;
}
th{
  color: blue;
}
sub{
  color: black;
}
h1{
    text-align: center;
    color: blue;
}


  </style>
<!--<style type="text/css">
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
  </style> -->

  </head>
   <script>
  function validate(){
    var v=document.getElementById('uploadedimage').value;
    
    if(v=="") alert("No file is selected");
    else{
    var extension=v.substr(v.length - 4);
    if(extension==".png"||extension==".jpeg"||extension==".jpg"||extension==".gif"||extension==".JPG"||extension==".JPEG"||extension==".PNG"||extension==".GIF"){
      //alert(faculty+"\t"+subject);
      
          document.getElementById("form").submit(); 
    }
    else{
      alert("Please choose appropriate file")
     }
    }
  }

  </script>
<body>

      <div class=" col-md-offset-2 col-md-8 well">
            <h1><b>I-Profile</b></h1>
          <div class="row">
            <form id="form" name="form" action="I_Profile.php" method="post" enctype="multipart/form-data" >
              <div class="col col-md-offset-2 col-md-6">
                <br><br>
                <table align="center" width="100%">

<?php

include('mysql.php');
if($_SERVER['REQUEST_METHOD']== "POST"){
//echo "Naveen";
$file_name=$_FILES["uploadedimage"]["name"];
$temp_name=$_FILES["uploadedimage"]["tmp_name"];
$file="./Profiles/"."$student_id"."$file_name"; 

if(move_uploaded_file($temp_name,$file)){
  //echo "Enterd";
  $query="UPDATE StudentDetails SET path='$file' WHERE student_id='$student_id'";
  $result=mysqli_query($link,$query);
  if($result){

      echo "
        <div class='alert alert-success alert-dismissable fade in'>Your Profile picture is updated successfully
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      ";
      echo "<script>window.parent.location.reload()</script>";
      

}
else{
     echo "
        <div class='alert alert-danger alert-dismissable fade in'>Error!!! while uploading your profile picture. Please try after some time
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      ";
      echo "<script>window.parent.location.reload()</script>"; 
}
}
else{
  echo "
        <div class='alert alert-danger alert-dismissable fade in'>Error!!! while uploading your profile picture. Please try after some time
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      "; 
      echo "<script>window.parent.location.reload()</script>";
}
}


?>

<br>
               
                  <?php
                      $query="SELECT * FROM StudentDetails WHERE student_id='$student_id'";
                      $result=mysqli_query($link,$query);
                      $row=mysqli_fetch_array($result);
                      echo "
                            <tr>
                                <th>I am:</th>
                                <td>$row[2]</td>
                            </tr>
                             <tr>
                                <th>ID Number:</th>
                                <td>$row[1]</td>
                            </tr>
                             <tr>
                                <th>Year:</th>
                                <td>$row[3]</td>
                            </tr>
                             <tr>
                                <th>Class:</th>
                                <td>$row[4]</td>
                            </tr>
                             <tr>
                                <th>Branch:</th>
                                <td>$row[5]</td>
                            </tr>
                             <tr>
                                <th>Gmail:</th>
                                <td>$row[6]</td>
                            </tr>";?>
                             <tr>
                             <th>Upload your picture</th>
                            <td>

                <input type="file" id="uploadedimage" name="uploadedimage"><br><sub> Choose your picture only jpg,png,jpeg,gif acceptable</sub><br><br>
                <button type="button" name="button" class="btn btn-primary" id="button" onClick="validate();">Upload</button>
                 </td>
                </tr>

                </table>
              
              </div>

            </form>
              <a href="changePassword.php"><button class="btn btn-info">Change Password</button></a>

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

