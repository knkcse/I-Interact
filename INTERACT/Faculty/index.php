<?php

if( isset($_COOKIE["id"])){
    header('Location:Faculty_Profile.php');
}
?>

<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
$student_id=$_POST['username'];
session_start();
$_SESSION['faculty_id']=$student_id;
header('Location:Faculty_Profile.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>I-Interact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="lib/css/css.css">
  <script type="text/javascript" src="Ajax.js"></script>
</head>
<body>
<?php include('head.php');?>
<div class="col-lg-offset-4 col-lg-4 form">

            <form id='form' name="form" action="index.php" method="post">
                <table align="center" width="100%">
                    
                        <tr><td colspan="2" ><span id="login_error"></span><br></td></tr>
                   
                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                </table>
                <table align="center" width="100%">
                 <tr>
                    <td>
                            <label for="username">Username:</label>
                    </td>
                     <td>
                             <input type="text" class="form-control" id="username" name="username" placeholder="Enter your id number" />
                     </td>
                 </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                                <label for="password">Password:</label>
                        </td>
                        <td>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" />
                        </td>
                        <td><button type="button" id="go" class="btn btn-success btn-sm" onclick="checkValidation()">Go!</button></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td ><span id="error"></span></td>
                        
                    </tr>
                    <tr>
                        <td><a href="Signup.php">Register</a></td>
                        <td><a href="message_Forgotpassword.php">Forgot Password</a></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                </table>


            </form>
            <a href="../I-Interact/"><u>Are you student? Click here</u></a>
    </div>
</body>
</html>
