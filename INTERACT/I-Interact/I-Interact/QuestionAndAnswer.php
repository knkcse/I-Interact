<html>
<head>
    <title>I-Interact</title>
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <script src="lib/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="lib/css/css.css">
    <style type="text/css">
    	#position{
    		position: relative;
    		top:80px;
    		width: 100px;
    	}
    </style>
    <script type="text/javascript">
    	function checkQuestion(){
    		
    		if(document.getElementById('question').value!=""){
    				alert(document.getElementById('question').value);		
    				document.getElementById('form').submit();
    		}
    	}
    </script>

</head>
<body>
	<div class="container">
		<div class="row">
			<h3>Ask a Question</h3>
			<div class="col-lg-6">
			<form id="form" name="form" action="Q_A.php" method="post">
				<table class="table " width="30%" align="center" >
					<tr>
						<td><textarea id="question" class="form-control" rows="4" cols="50" name="question" placeholder="Type your question"></textarea></td>
						<td><button type="button" class="btn btn-sm btn-defaul" id="position" onclick="checkQuestion()">ASK</button></td>
					</tr>

				</table>
			</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
session_start();
$student_id=$_SESSION['student_id'];
$_SESSION['student_id']=$student_id;
?>