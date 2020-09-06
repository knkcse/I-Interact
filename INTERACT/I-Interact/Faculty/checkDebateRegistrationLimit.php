<?php
include('mysql.php');
//Already register
session_start();
if(isset($_SESSION['faculty_id'])){
$faculty_id=$_SESSION['faculty_id'];
$_SESSION['faculty_id']=$faculty_id;

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="lib/css/requiredCSS.css">
  </head>
  <!--<style type="text/css">
    span{
      color:red;
    }
    b{
      color: blue;
    }
    .top{
      position: absolute;
      top:100px;
    }
    
    sub{
        color:orange  ;
        text-decoartion: blink;

    }
  </style> -->
  <body>


<?php

$query="SELECT * FROM DebateRegister WHERE id='$faculty_id'";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);
//echo $count.mysql_error();
if($count==1){
		echo "<center>
		<div class=' col-md-offset-3 col-md-6 well'>
				<i>You are registered for debate.</i><br>
				<b>Session will be at 8:00 pm</b>
		</div></center>

	 ";
	 date_default_timezone_set("Asia/Kolkata");
		$time=date("h:a");
		$d=date('Y-m-d');
		//echo $d.'<br>';
		$dd=date('Y-m').'-30';
		//echo $dd.'<br>';
		$date1=date_create($d);
		$date2=date_create($dd);
		$diff=date_diff($date1,$date2);
		$now=$diff->format("%R%a days");
		//echo $now;
		if($now==0){
				if($time=="08:pm") 

					header("Location:debateSessionStart.php");
			}
		
}
else{

$query="SELECT * FROM DebateRegister";
$result=mysqli_query($link,$query);
$count=mysqli_num_rows($result);
if($count==15){//Check for register limit
		echo "
			<div class=' col-md-offset-3 col-md-6 well'>
					<span style='position:relative;left:260px'>Registration was closed</span><br>
					
					
			
		";

		//For list
		$yesterday=date('Y-m-d',strtotime("-1 days"));
	    $today=date('Y-m-d');

	    $query="SELECT * FROM DebateRegister WHERE (date='$yesterday' OR date='$today')";
	    $result=mysqli_query($link,$query);
	    $count=mysqli_num_rows($result);
		echo "<br>

		<button style='position:relative;left:300px' type='button' class='btn btn-warning' data-toggle='collapse' data-target='#list'>View List</button>
							  <div id='list' class='collapse'><br>";
			if($count==0){
			
					echo "No , list available. Try after some time";


					}						  	
			else{			
			echo "	

		            <table class='table' >
		            <thead>
		                <tr>
		                    <th>S.no</th>
		                    <th>ID</th>
		                    <th>Name</th>
		                    <th>Branch</th>
		                    <th>Registered date</th>
		                </tr>
		            </thead>
		            <tbody>



			";
			  $i=1;
          while($row=mysqli_fetch_array($result)){

            echo "
                <tr>
                  <td>$i</td>
                  <td>$row[1]</td>
                  <td>$row[2]</td>
                  <td>$row[3]</td>
                  <td>$row[4]</td>

                </tr>


            ";$i++;

          }
			echo "	  
							   
							    
							    
			<br>
			</div>
		";
			}


}

else{//If less than number then goto register debate
	//die("Naveen");
	header('Location:RegisterDebate.php');
	//echo "Came here";
	
}
}



?>
<?php
}
else{
	header("Location:index.php");
}

?>