
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="lib/css/css.css">
</head>
<style type="text/css">
  b{
    color: green;
  }
</style>
<script type="text/javascript">
	
function checkValid() {
	document.getElementById('error').innerHTML="";
	var user=document.getElementById('username').value;
	if(user==""){
			document.getElementById('error').innerHTML="* Please enter your user name or gmail";
			return;
	}
	else{	

			

    var xmlhttp;
    if(window.XMLHttpRequest){

        xmlhttp= new XMLHttpRequest();
    }
    else{
        xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
    }

    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState==4&&xmlhttp.status==200){
            var s=new String(xmlhttp.responseText);
            if(s.localeCompare("valid")==0){
              //alert("Yes exist");
               // document.getElementById('form').submit();
               document.getElementById('success').innerHTML=" Password is sent to gmail";
               document.getElementById('username').value="";
               setTimeout(function(){
                       window.location='index.php';
                    }, 2000);

            }
            else{
                document.getElementById('error').innerHTML=" * Details not found";
            }


        }

    }
    xmlhttp.open("GET","valid2.php?username="+user,false);

    xmlhttp.send();//sends the request

			}
}

</script>
<body>
<?php include('head.php');?>
<div class="col-lg-offset-4 col-lg-4 form">
            <form name="login" action="" method="post">
                <table align="center" width="100%">
                    
                        <tr><td colspan="2" >&nbsp;<br></td></tr>
                   
                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                </table>
                <span>This page has an error .Please contact admin</span><br><br>
                <a href="index.php"><button class="btn btn-info" type="button">Go back</button></a>
           <!--     <table align="center" width="100%">
                 <tr>
                        <td>&nbsp;</td>
                        <td><b id="success"></b></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                 <tr>
                    <td>
                            <label for="username">Username:</label>
                    </td>
                     <td>
                             <input class="form-control" id="username" name="username" placeholder="Enter your id or gmail" />
                     </td>
                 </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><span id="error"></span></td>
                    </tr>
                    <tr> <td></td>
                        <td style="float: center"><button type="button" class="btn btn-success" onclick="checkValid()"> Submit</td>
                       
                    </tr>

                    

                </table> -->

            </form>
    </div>
</body>
</html>