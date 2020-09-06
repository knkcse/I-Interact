<?php
session_start();
if(isset($_SESSION['faculty_id'])){
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;
$student_id=$_SESSION['student_id'];
include('mysql.php');


?>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){

$chat=$_POST['chat'];
$query="INSERT INTO Chat (from_id,to_id,chat,date) VALUES ('$faculty_id','$student_id','$chat',NOW())";
$result=mysqli_query($link,$query);
echo mysqli_error($link);
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
    h2{
      color: blue;
    }
  	#id{
  		color: blue;
  	}
  	#id2{
  		color: orange;
  	}
  	#right{
  		position: relative;
  		float: right;
  		
  	}
  	#chat{
  		width:400px;
  	}
  </style>
</head>
<body class="container-fluid">
	<div class="col-lg-offset-2 col-lg-6 well ">
  <center><h2>Go-Live with<br> <?php 
 $q1="SELECT * FROM StudentDetails WHERE student_id='$student_id'";
  $rr1=mysqli_query($link,$q1);
  $row4=mysqli_fetch_array($rr1);

  echo $row4[2];
  echo "&nbsp;<img src='../I-Interact/$row4[10]' width='30px' height='30px'/>";
?>
 </h2> </center><hr>
    <table class="table">

		<?php
			$query="SELECT * FROM Chat WHERE from_id in ('$student_id','$faculty_id') and  to_id in ('$student_id','$faculty_id')";
			$result=mysqli_query($link,$query);
			$count=mysqli_num_rows($result);
      echo mysqli_error($link);
			if($count==0){
          echo "<tr>";
					echo " <td>No , chat  before</td></tr>";
			}
			else{
				while ($row=mysqli_fetch_array($result)) {
          echo "<tr>";
					if($row[1]==$faculty_id){

						echo " <td><i id='right'>$row[3]  <b style='color:blue;'>:You</b></i></td>";
					}
					else{
						echo "<td><i id='left'><b id='id2'><img src='../I-Interact/$row4[10]' width='30px' height='30px'/>&nbsp;</b></i> <i id='left'>$row[3]</i></td>";	
					}
          echo "</tr>";
				}

			}

		?>
    </table>

    <br><hr>
		<!-- <form  id="form" name="form"  action="Chat.php" method="post">		
			<textarea id="chat" class="form-control" rows="4" cols="20" name="chat" placeholder="Type your text here"></textarea>
			<br>
			<button type="button" class="btn btn-success" id="button" name="submit" onClick="checkValidate();">Send</button>
		</form> -->
		 <form id="form" name="form" action="Chat.php" method="post">
				<table class="table " width="30%" align="center" >
					<tr>
						
						<td><textarea id="chat" class="form-control" rows="4" cols="50" name="chat" placeholder="Type your text here..."></textarea></td>
						
					</tr>
					<tr>
						<td><button type="button" class="btn btn-sm btn-success" id="position" onclick="checkQuestion()">Send</button></td>	
					</tr>
<tr>

				


  </table>
      </form> 
  <table>
    <td style="position: relative;left: 500px;top:-60px">
  <a href="GO_Live.php"><button class="btn btn-warning" style="float: right">Quit</button></a>
  </td>
  </tr>
  </table>    
  </div>



</body>
</html>
<?php
}
else{
  header("Location:index.php");
}

?>