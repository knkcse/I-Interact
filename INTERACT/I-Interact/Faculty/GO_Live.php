<?php
include('mysql.php');
session_start();
if(isset($_SESSION['faculty_id'])){
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;

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
</head>
<body class="container-fluid">
<div class="col-lg-offset-2 col-lg-6 well">
<div class="row">
<center><h1>Go-Live</h1></center>
</div><br>
<table class="table" width="80%">
<?php
$query="SELECT distinct(from_id) FROM Chat WHERE to_id='$faculty_id'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);

if($count==0){
        echo "<tr>
                <td>No,chat from students.</td>
            </tr>
        "   ;
}
else{
        echo "
                <thead>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student Class</th>
                </thead>

            ";
        while ($row=mysqli_fetch_array($result)) {
            $q="SELECT * FROM StudentDetails WHERE student_id='$row[0]'";
            $r=mysqli_query($link,$q);
            while($t=mysqli_fetch_array($r))
            echo "
                <tr>
                <td><a href='golive.php?id=$t[1]'>$t[1]</a></td>
                <td>$t[2]</td>
                <td>$t[4]</td>

                </tr>

            ";
            
        }
}

?>

</table>

</body>
</html>
<?php
}
else{
    header("Location:index.php");
}
?>