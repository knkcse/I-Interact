


<?php
include('mysql.php');
session_start();
if(isset($_SESSION['faculty_id'])){

$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;
$query="SELECT * FROM FacultyDetails WHERE faculty_id='$faculty_id'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
//echo mysql_error();
 setcookie("id", $faculty_id, time()+3600, "/","", 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="lib/css/css.css">
    
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    iframe{
      height: 500px;
      width: 740px;
      overflow-x: hidden;

    }
    .link2{
    position: relative;
    left: 5px;
    width: 250px;
    color: blue;
    border:2px solid black;

}
  body{
    overflow-x: hidden;
  }
  .left{
      height:500px;
  }
  footer{
    position: relative;
    top:-19px;
  }
  p{
    text-align: left;
    cursor: pointer;

  }
  h1{
    text-align: center;
  }
  </style>
  <script type="text/javascript">
    function searchID() {
      var id=document.getElementById('search').value;
      if(id!=""){
          window.open("search.php?id="+id, "targetframe");
      }
    }
  </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <h2>I-INTERACT</h2>
    
    <div class="search">

    <input type="text" name="seach" id="search" class="form-control" placeholder="Search Name,ID ...">
    <button  id="searchIcon" class="btn btn-sm btn-success" type="button" onclick="searchID()"><span class="glyphicon glyphicon-search"></span></button>
    </div>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right " id="about" >
      <li> <a href="" style="color:orange" data-toggle="modal" data-target="#aboutus">About Us</a>

  <!-- Modal -->
  <div class="modal fade" id="aboutus" >
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><h1>I-Interact</h1></h4>
        </div>
        <div class="modal-body">
          <b>Vamshi Chaitanya<hr>G.Venu Yadav<hr>Rajender<hr>B.Venkatesh<hr>Naveen Kumar Kammari<hr></b>
        </div>
        
      </div>
    </div>
  </div>
        <li><a href="" style="color:orange" data-toggle="modal" data-target="#contactus">Contact US</a>
          <!-- Modal -->
  <div class="modal fade" id="contactus" >
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><h1>I-Interact</h1></h4>
        </div>
        <div class="modal-body">
          <p style="color: green; text-align: center;">AB-I , 007 <br>I-Interact team</p>
        </div>
        
      </div>
    </div>
  </div>

        </li>
        <li><a href="Logout.php" style="color:orange"><p class="glyphicon glyphicon-log-out "></p> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row "><br>

    <div class="col-md-2 alert alert-info alert-dismissable left">
        <div class="text-center">
          <img src="<?php echo $row[8];?>" class="img img-circle" alt="Student Photo" width="100px" height="100px">
      </div>
        <a href="I_Profile.php" target="targetframe"><button class="iprofile"> <b>I-Profile</b></button></a>
        <hr>  
        <ul >
        <li><a href="Q_A.php" target="targetframe"><button class="btn btn-info link">Q&A</button></a></li>
        <li><a href="Debate.php" target="targetframe"><button class="btn btn-info link">Go Debate</button></a></li>
        <li><a href="GO_Live.php" target="targetframe"><button class="btn btn-info link">Go Live</button></a></li>
        <li><a href="Student_Assignments.php" target="targetframe"><button class="btn btn-info link">Assignment</button></a></li>
        <li><a href="NoticeBoard.php" target="targetframe"><button class="btn btn-info link">Notice Board</button></a></li>
        </ul>
      </div><!-- end of left -->
    <!-- start of middle -->
    <div class="col-md-7"> 
      
      <iframe src="I_Profile.php" name="targetframe"  frameborder="0" scrolling="auto" >
    </iframe>
      </div><!-- end of middle -->

      <!-- start of right -->
    <div class="col-sm-3  alert alert-info left">
      <div class="row" style="text-align: center"><b><i>Welcome <?php echo $row[2]?></i></b></div><br>
          <button class="btn btn-warning link2" ><u>Notice Board</u></button><br>
         
          <!-- <div>
                       <button type='button' class='btn btn-info' data-toggle='collapse' data-target='#demo22'>Instructions to Students</button>
                       <div class='row'><br>
                       <div id='demo22' class=' collapse '>Instructions list</div>
                       </div>
          </div> -->

          <div >
              <table >
                     <?php 
 

                          $query=" select * from NoticeBoard order by(date) desc limit 5";
                          $result=mysqli_query($link,$query);
                          $count=mysqli_num_rows($result);
                          echo mysqli_error($link);
                          if($count!=0){
                            while($row=mysqli_fetch_array($result)){
                            echo "
                                <tr >
                                    <td>
                                        <p  data-toggle='collapse' data-target='#$row[0]' style='color: orange;'><sub class='glyphicon glyphicon-plus'></sub>  $row[2]</p>
                                    </td>

                                </tr>

                                <tr>
                                    <td >
                                        <div style='text-align=center' class='collapse well' id='$row[0]' style='color: blue'>&nbsp;$row[3]";
                                        if($row[4]!='NULL'){
                                            echo "<br>  
                                                  find attachment <a href='$row[4]'>Download</a>

                                            ";
                                        }
                                echo "</div>
                                    </td>

                                </tr>

                            ";
                          }
                          echo "<tr><td><a href='NoticeBoard.php' target='targetframe'>Click here for more</a></td></tr>";
                          }
                       ?>
                     <br>
                     <!--  <a href="NoticeBoard.php" target="targetframe">Click here for more</a> -->
                     
                     <!-- <tr><td><br><a data-toggle="collapse" data-target="#demo222" style="color: orange;">Notice One</a></td></tr>
                      <tr><td><div class="row">
                       <div id='demo222' class='collapse' style="color: blue;" >Notice one here</div>
                       </div></td></tr><tr>
                       <tr><td><a data-toggle="collapse" data-target="#demo22" style="color: orange;">Click herer</a></td></tr>
                      <tr><td> <div class="row col-md-offset-1">
                       <div id='demo22' class='collapse ' style="color: blue;">Instructions list</div>
                       </div></td></tr> -->
            </table>
          </div>
    </div>
    </div><!-- end of right -->
</div>    
<!-- footer -->
<footer class="container-fluid text-center alert alert-info">
  <i >I-Interact &copy; 2017</i>
</footer>

</body>
</html>
<?php
}

else{
  header("Location:index.php");
}
?>