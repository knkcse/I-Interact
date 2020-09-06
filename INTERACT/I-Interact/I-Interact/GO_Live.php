<?php
session_start();
if(isset($_SESSION['student_id'])){
$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
  </head>
    <link rel="stylesheet" type="text/css" href="lib/css/css.css">
    <style>
    .top{
    	position: relative;
    	top:150px;
    }
    .select {
        width:200px;
    }

    </style>
    <script>
    function displayDepartment(){
    		document.getElementById('error').innerHTML="";
    			
    		var dept=document.getElementById('department').value;
    		if(dept=='CSE'){
    			
    			document.getElementById('cse_fac').style.display="";
    			document.getElementById('ece_fac').style.display='none';
    			document.getElementById('mme_fac').style.display='none';
    			document.getElementById('me_fac').style.display='none';
    			document.getElementById('chem_fac').style.display='none';
    			document.getElementById('civil_fac').style.display='none';
    			
    		}
    		else if(dept=='ECE'){
    			
    			document.getElementById('cse_fac').style.display="none";
    			document.getElementById('ece_fac').style.display='';
    			document.getElementById('mme_fac').style.display='none';
    			document.getElementById('me_fac').style.display='none';
    			document.getElementById('chem_fac').style.display='none';
    			document.getElementById('civil_fac').style.display='none';
    			
    		}
    		else if(dept=='MME'){
    			
    			document.getElementById('cse_fac').style.display="none";
    			document.getElementById('ece_fac').style.display='none';
    			document.getElementById('mme_fac').style.display='';
    			document.getElementById('me_fac').style.display='none';
    			document.getElementById('chem_fac').style.display='none';
    			document.getElementById('civil_fac').style.display='none';
    			
    		}
    		else if(dept=='ME'){
    			//alert("Naveen");
    			document.getElementById('cse_fac').style.display='none';
    			document.getElementById('ece_fac').style.display='none';
    			document.getElementById('mme_fac').style.display='none';
    			document.getElementById('me_fac').style.display='';
    			document.getElementById('chem_fac').style.display='none';
    			document.getElementById('civil_fac').style.display='none';
    			
    		}
    		else if(dept=='CHEM'){
    			//alert("Naveen");
    			document.getElementById('cse_fac').style.display='none';
    			document.getElementById('ece_fac').style.display='none';
    			document.getElementById('mme_fac').style.display='none';
    			document.getElementById('me_fac').style.display='none';
    			document.getElementById('chem_fac').style.display='';
    			document.getElementById('civil_fac').style.display='none';
    			
    		}
    		else if(dept=='CIVIL'){
    			//alert("Naveen");
    			document.getElementById('cse_fac').style.display='none';
    			document.getElementById('ece_fac').style.display='none';
    			document.getElementById('mme_fac').style.display='none';
    			document.getElementById('me_fac').style.display='none';
    			document.getElementById('chem_fac').style.display='none';
    			document.getElementById('civil_fac').style.display='';
    			
    		}

    	
    }
    function validate(){
    	var a=document.getElementById('department').value;
    	a=a.toLowerCase();
        document.getElementById('error').innerHTML="";
    	
    	//alert("Naveen"+);
    	if(a!='null'){
    		var id=document.getElementById(a+'_fac').value;
    		window.location.href = "StartChat.php?department=" + a + "&faculty_id=" + id;
    	}
    	else{
    			document.getElementById('error').innerHTML="*Please select faculty";
    	}
    }
  
    </script>
</head>
<body class="container-fluid">
<div class="col-lg-offset-2 col-lg-6 well">
<div class="row">
<center><h1>Go-Live</h1></center>
</div><br>
<form id="form" name="form" action="" method="post" >
<table align="center">
<tr>
    <td>
<select class="form-control select" id="department" name="department" onchange="displayDepartment();">
	<option value="null">Select your department</option>
	<option value="CSE">CSE</option>
	<option value="ECE">ECE</option>
	<option value="MME">MME</option>
	<option value="ME">ME</option>
	<option value="CHEM">CHEM</option>
	<option value="CIVIL">CIVIL</option>

</select>
    </td>
</tr>
</table><br>
<table align="center" >
<?php
	include('mysql.php');
	$query="SELECT * FROM FacultyDetails WHERE department='CSE'";
	$result=mysqli_query($link,$query);
    echo "<tr><td>";
	echo "<select class='form-control select ' id='cse_fac' name='cse_fac' style='display:none;'>";
	while($row=mysqli_fetch_array($result)){
	echo "<option value='$row[1]'>$row[2]</option>";
	}

	echo "
	</select></td></tr>";
	$query="SELECT * FROM FacultyDetails WHERE department='ECE'";
	$result=mysqli_query($link,$query);

	echo "<tr><td><select class='form-control select' id='ece_fac' name='ece_fac' style='display:none;'>";
	while($row=mysqli_fetch_array($result)){
	echo "<option value='$row[1]'>$row[2]</option>";
	}

	echo "
	</select></td></tr>";
	$query="SELECT * FROM FacultyDetails WHERE department='MME'";
	$result=mysqli_query($link,$query);

	echo "<tr><td><select class='form-control select' id='mme_fac' name='mme_fac' style='display:none;'>";
	while($row=mysqli_fetch_array($result)){
	echo "<option value='$row[1]'>$row[2]</option>";
	}

	echo "
	</select></tr></td>";
	$query="SELECT * FROM FacultyDetails WHERE department='ME'";
	$result=mysqli_query($link,$query);

	echo "<tr><td><select class='form-control select' id='me_fac' name='me_fac' style='display:none;'>";
	while($row=mysqli_fetch_array($result)){
	echo "<option value='$row[1]'>$row[2]</option>";
	}

	echo "
	</select></tr></td>";
	$query="SELECT * FROM FacultyDetails WHERE department='CHEM'";
	$result=mysqli_query($link,$query);

	echo "<tr><td><select class='form-control select' id='chem_fac' name='chem_fac' style='display:none;'>";
	while($row=mysqli_fetch_array($result)){
	echo "<option value='$row[1]'>$row[2]</option>";
	}

	echo "
	</select></tr></td>";
	$query="SELECT * FROM FacultyDetails WHERE department='CIVIL'";
	$result=mysqli_query($link,$query);

	echo "<tr><td><select class='form-control select' id='civil_fac' name='civil_fac' style='display:none;'>";
	while($row=mysqli_fetch_array($result)){
	echo "<option value='$row[1]'>$row[2]</option>";
	}

	echo "
	</select></tr></td>";

?>
</table>
<br>
<button type="button" name="button" class="btn btn-success" onclick="validate()" style="position: relative;float: right;">Start</button>
<br>

</form>
<span id="error"></span>
</div>

</body>
</html>
<?php
}
else{
    header("Location:index.php");
}
?>