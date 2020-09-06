<?php
session_start();
if(isset($_SESSION['faculty_id'])){
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;
include('mysql.php');
?>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
$chat=$_POST['chat'];
$query="INSERT INTO Debate(id,post,date) VALUES ('$faculty_id','$chat',NOW())";
$result=mysqli_query($link,$query);

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Chat</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script>
    
    function checkQuestion(){
        //alert("Naveen "+id);
        
        if(document.getElementById('chat').value!=""){
              
            document.getElementById('form').submit();
        }
        else{
          alert("Please enter your text here");
        }
      }
    function quitFunction(){
      window.location.href="messageQuit.php";
    }
  </script>
  <style type="text/css">
    .top{
      position: absolute;
      top:100px;
    }
    h4{
      position: absolute;
      top:50px;
      left:340px;
      color: blue;

    }
    b{
      color: blue;
    }
    sub{
      font-size:10px;
      opacity: 0.3;
      color:orange;
    }
    #right{
      position: absolute;
      left:350px;
      
    }
    #chat{
      width:400px;
    }
    .left{
      text-align: right;
    }
  </style>
</head>
<body class="container-fluid">

<div class="row "><br>
  
  <div class="col-md-offset-2 col-md-8 well ">

  <center><h3>Debate Topic is Social Networks</h3></center>
  <br><br>

    <?php
      $query="SELECT * FROM Debate";
      $result=mysqli_query($link,$query);
      $count=mysqli_num_rows($result);
      if($count!=0){
        echo "<table width='100%' align='center' class='table'>

        ";
        while($row=mysqli_fetch_array($result)){

            if($row[1]==$faculty_id){

              $q4="SELECT * FROM FacultyDetails WHERE faculty_id='$faculty_id'";

              $rr1=mysqli_query($link,$q4);
              $row5=mysqli_fetch_array($rr1);
                            //echo $row5[10];
                           // echo "<td><i id='right'> $row[3] <b style='color:blue' >&nbsp;&nbsp;</b><img src='$row5[10]' width='30px' height='30px'/></i></td>";

                echo "<tr><td class='left'>$row[2] &nbsp;<img src='$row5[8]' width='30px' height='30px'/><br><sub>$row[3]</sub></td></tr>";
            }
            else{
              $cc=$row[1];
              if($cc[0]=='B'||$cc[0]=='b'){
                $q4="SELECT * FROM StudentDetails WHERE student_id='$cc'";

              $rr1=mysqli_query($link,$q4);
              $row5=mysqli_fetch_array($rr1);
                            //echo $row5[10];
                           // echo "<td><i id='right'> $row[3] <b style='color:blue' >&nbsp;&nbsp;</b><img src='$row5[10]' width='30px' height='30px'/></i></td>";

                echo "<tr><td><img src='../I-Interact/$row5[10]' width='30px' height='30px'/>&nbsp;<b>$row5[2]</b><br>$row[2] &nbsp;<br><sub>$row[3]</sub></td></tr>";
              }
              //echo "<tr><td>$row[1]: $row[3]<br><sub>$row[4]</sub></td></tr>";
              else{
                 $q4="SELECT * FROM FacultyDetails WHERE faculty_id='$cc'";

              $rr1=mysqli_query($link,$q4);
              $row5=mysqli_fetch_array($rr1);
                            //echo $row5[10];
                           // echo "<td><i id='right'> $row[3] <b style='color:blue' >&nbsp;&nbsp;</b><img src='$row5[10]' width='30px' height='30px'/></i></td>";

                echo "<tr><td><img src='$row5[8]' width='30px' height='30px'/>&nbsp;<b>$row5[2]</b><br>$row[2] &nbsp;<br><sub>$row[3]</sub></td></tr>";
              }
            }




        }


      }

    ?><br><hr>
    <!-- <form  id="form" name="form"  action="Chat.php" method="post">   
      <textarea id="chat" class="form-control" rows="4" cols="20" name="chat" placeholder="Type your text here"></textarea>
      <br>
      <button type="button" class="btn btn-success" id="button" name="submit" onClick="checkValidate();">Send</button>
    </form> -->
     <form id="form" name="form" action="debateSessionStart.php" method="post">
        <table class=" table " width="20%" align="center">
          <tr>
            
            <td><center><textarea id="chat" class="form-control" rows="4" cols="50" name="chat" placeholder="Type your text here..."></textarea></center></td>
            
          </tr>
          <tr>
            <td><center><button type="button" class="btn btn-sm btn-info" id="position" onclick="checkQuestion()">Send</button></center></td> 
          </tr>


        </table>
      </form> 
      <button class="btn btn-default" onclick="quitFunction()">Quit</button>


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