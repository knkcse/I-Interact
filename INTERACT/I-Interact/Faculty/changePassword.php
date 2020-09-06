<?php
session_start();
if(isset($_SESSION['faculty_id'])){
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;

?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="lib/css/requiredCSS.css">
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
    
    function checkValidate(){
        document.getElementById('password_error').innerHTML="";
        document.getElementById('error').innerHTML="";
        var new_password=document.getElementById('new_password').value;
        var re_password=document.getElementById('re_password').value;
        if(new_password!=""){
            //alert(new_password!=re_password);
            if(new_password!=re_password){
                document.getElementById('error').innerHTML="* Passwords are not matched";
                return

            }
            else{
                document.getElementById('form').submit();
            }
        }
        else{
              document.getElementById('password_error').innerHTML="* Enter password";
        }
        
      }
      function checkPassword(){
        document.getElementById('password_error').innerHTML="";
        document.getElementById('error').innerHTML="";
        var new_password=document.getElementById('new_password').value;
         document.getElementById('password_error').innerHTML="";
        if(new_password==""){
              document.getElementById('password_error').innerHTML="* Please enter  password";
              return false;
        }
        else if(new_password.length<4){
          document.getElementById('password_error').innerHTML="* Please enter 4 length password";
              return false;
        }
        else
          return true;
      }
  </script>
<body>

      <div class=" col-md-offset-2 col-md-8 well">
            CSE:
          <div class="row">
              <div class="col col-md-offset-2 col-md-8">
<?php
include('mysql.php');
if($_SERVER['REQUEST_METHOD']== "POST"){

$password=$_POST['new_password'];
$query="UPDATE FacultyDetails SET password='$password' WHERE faculty_id='$faculty_id'";
  $result=mysqli_query($link,$query);
  if($result){

      echo "
        <div class='alert alert-success alert-dismissable fade in'>Your password has been changed
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      ";

}
else{
     echo "
        <div class='alert alert-danger alert-dismissable fade in'>Error!!! while changing your password
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div> 

      "; 
}

}
?>


                  <form id="form" name="form" action="changePassword.php" method="post">
                      <table align="center" >
                          <tr>
                          <th>Enter new password:</th>
                          <td><input type="password" id="new_password" name="new_password" placeholder="Enter your password" class="form-control" onblur="checkPassword()"></td>

                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><span id="password_error"></span></td>
                          </tr>
                          <tr>
                          <th>Re-enter your password:</th>
                          <td><input type="password" id="re_password" name="re_password" placeholder="Re-enter your password" class="form-control"></td>

                          </tr>

                          <tr>
                            <td>&nbsp;</td>
                            <td><span id="error"></span></td>
                          </tr>

                      <tr><td>
                        <button type="button" name="button" value="button" class="btn btn-success" onclick="checkValidate()">Change Password</button>
                        </td></tr>
                          </table>
                  </form>
                  <a href="I_Profile.php"><button class="btn btn-default glyphicon glyphicon-arrow-left"> Back</button></a>
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