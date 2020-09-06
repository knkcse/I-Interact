<?php 
include('mysql.php');
session_start();
if(isset($_SESSION['student_id'])){
$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;
$query="SELECT * FROM StudentDetails WHERE student_id='$student_id'";
$result=mysqli_query($link,$query);
$r=mysqli_fetch_array($result);
$branch=$r[5];
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
    
    function checkQuestion(){
        //alert("Naveen "+id);
        
            var faculty=document.getElementById('faculty').value;
            //var department=document.getElementById('department').value;
            var rating=document.getElementById('rating').value;
            //alert(faculty+"\t"+rating);
            if(faculty!=""&&rating!=""){
             // alert("Nothoing");
              if(document.getElementById('remark').value!=""){
                document.getElementById('form').submit();
              }
              else{
                alert("Please enter your remark");
              }
              

            }
            
            else
              alert("Please choose faculty,rating");



        
      }
  </script>
<body>

      <div class=" col-md-offset-2 col-md-8 well">
            <b>FeedBack</b>
          <div class="row">
            <form id="form" name="form" action="save_FeedBack.php" method="post" >
              <div class="col col-md-offset-2 col-md-6">
               <!-- <select id="department" name="department" class="form-control"><!-- take subjects from table !
                    <option value="">Select department</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="MME">MME</option>
                    <option value="ME">ME</option>
                    <option value="CHEM">CHEM</option>
                    <option value="CIVIL">CIVIL</option>
                </select>
                -->
                 <?php
                    $query="SELECT * FROM FacultyDetails WHERE department='$branch'";
                      $result=mysqli_query($link,$query);
                      //die(mysql_error());
              ?>
                <br><br>
                <table align="center">
                <tr>
                <td>
                <select id="faculty" name="faculty" class="form-control">
                    <option value="">Select your faculty</option>
                   <?php
                      while($row=mysqli_fetch_array($result)){
                      echo "
                          <option value='$row[1]'>$row[2]</option>
                        ";

                          }
                          ?>
                </select><br>
                </td>
                </tr>
                <tr>
                <td>
                <select id="rating" name="rating" class="form-control"><!-- take subjects from table !-->
                    <option value="">Select your rating</option>
                    <option value="1">1 out of 5</option>
                    <option value="2">2 out of 5</option>
                    <option value="3">3 out of 5</option>
                    <option value="4">4 out of 5</option>
                    <option value="5">5 out of 5</option>
                </select>
                <br>
                </td></tr>
                </table>
                <br>
                <h3><b><i>Remarks</i></b></h3>
                <table class="table " width="30%" align="center" >
          <tr>
            
            <td><textarea id="remark" class="form-control" rows="4" cols="50" name="remark" placeholder="Type your text here..."></textarea></td>
            
          </tr>
          <tr>
            <td><button type="button" class="btn btn-sm btn-success" id="position" onclick="checkQuestion()">Send</button></td  
          </tr>


        </table>
              </div>

            </form>
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