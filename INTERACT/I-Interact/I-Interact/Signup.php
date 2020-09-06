<html>
<head>
    <title>I-Interact</title>
       	
    <title>I-Interact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="lib/css/css.css">
    <link rel="stylesheet" href="lib/css/smoothness/jquery-ui.css">
    <script src="lib/js/jquery-ui.js"></script>
	<script>
        $(function() {
            $( "#datepicker" ).datepicker({
                changeMonth:true,
                changeYear:true,
                yearRange:"-100:+0",
                dateFormat:"dd mm yy"
            });
        });
    </script>
	<script>
    function callChange(){
        checkID();
        document.getElementById('tr1').style.display='';
       // document.getElementById('tr2').style.display='';
        document.getElementById('tr3').style.display='';
        var year;
        var val=document.getElementsByName('identity');
        if(val[0].checked)
            year=val[0].value;
        else
            year=val[1].value;
        if(year=="faculty"){
            document.getElementById('tr1').style.display='none';
            //document.getElementById('tr2').style.display='none';
            document.getElementById('tr3').style.display='none';

        }
    }
    function callFuntion(){
        document.getElementById('year_error').innerHTML="";
        document.getElementById('branch_error').innerHTML="";
        document.getElementById('branch').disabled=false;
            
            var v=document.getElementById('year').value;
            
            if(v=='PUC-II'||v=='PUC-I'){
                document.getElementById('branch').disabled=true;
            }
    }

    function validateAll() {
        var val=document.getElementsByName('identity');
        if(val[0].checked)
            detail=val[0].value;
        else
            detail=val[1].value;

        if(detail=="faculty"){
    	if(checkName()&&checkID()&&checkDOB()&&checkEmail()&&checkMobile()&&checkPassword()&&checkPassword2()&&checkBranch()){
               // alert("SUCCESSFULLY VALIDATED");
    			document.getElementById('form').submit();
    	}
            }
        else{
            if(checkName()&&checkID()&&checkDOB()&&checkEmail()&&checkMobile()&&checkDetails()&&checkPassword()&&checkPassword2()&&checkClass()){
               // alert("SUCCESSFULLY VALIDATED");
                document.getElementById('form').submit();
        }
        }    
    }
    function checkBranch(){
             document.getElementById('branch_error').innerHTML="";
        var year=document.getElementById('branch').value;
            if(year==""){
                document.getElementById('branch_error').innerHTML="* Please choose your branch";
                return false
            }
            return true;
    }
    function checkName(){
    		//alert("Naveen");
    	document.getElementById('name_error').innerHTML="";
    	//alert("after");
    	var name=document.getElementById('name').value;
    	if(name==""){
    			document.getElementById('name_error').innerHTML="* Please enter your name";
    			return false;
    	}
    	else{
    			
    		for(var i=0;i<name.length;i++){
    				//alert(name.charAt(i));
                    if(name.charAt(i)!=' '){
    				if(!((name.charAt(i)<='z'&&name.charAt(i)>='a')||(name.charAt(i)<='Z'&&name.charAt(i)>='A'))) {
    						document.getElementById('name_error').innerHTML="* Your name should contain only charectes";
    						return false;
    				}
                }
    		}
    		return true;
    	}
    }
    function checkID(){

        document.getElementById('id_error').innerHTML="";
        var detail;
        var val=document.getElementsByName('identity');
        if(val[0].checked)
            detail=val[0].value;
        else
            detail=val[1].value;

        if(detail=="faculty"){
               var id=document.getElementById('sid').value;
              // alert(id);
            if(id==""){
                    document.getElementById('id_error').innerHTML=" * ID number is required";
                    return false;
            }
            else if(id.length>4){
                if(!(id.charAt(0)=='R'||id.charAt(0)=='r')){
                    document.getElementById('id_error').innerHTML=" * Your id number is not valid";
                    return false;
                }
                else{
                        for (var i = 3; i < id.length; i++) {
                            if(isNaN(id.charAt(i))){
                                    document.getElementById('id_error').innerHTML=" * Your id number is not valid";
                                    return false;
                            }       
                        }
                        return true;
                }
            }
            else{
                    document.getElementById('id_error').innerHTML=" * ID number is invalid";
                    return false;
            }
        }
               
        else{
            var id=document.getElementById('sid').value;
            if(id==""){
                    document.getElementById('id_error').innerHTML=" * ID number is required";
                    return false;
            }
            else if(id.length==7){
                if(!(id.charAt(0)=='B'||id.charAt(0)=='b')){
                    document.getElementById('id_error').innerHTML=" * Your id number is not valid";
                    return false;
                }
                else{
                        for (var i = 1; i < id.length; i++) {
                            if(isNaN(id.charAt(i))){
                                    document.getElementById('id_error').innerHTML=" * Your id number is not valid";
                                    return false;
                            }       
                        }
                        return true;
                }
            }
            else{
                    document.getElementById('id_error').innerHTML=" * ID number is invalid";
                    return false;
            }
        }
    }
    function checkDOB(){
        document.getElementById('dob_error').innerHTML="";

        var d=document.getElementById('datepicker').value;
        //alert("Lenth is "+d.length);
        if(d==""){
            document.getElementById('dob_error').innerHTML="* Please Choose DOB";
            return false;
        }
        else if(d.length!=10){
                document.getElementById('dob_error').innerHTML="* Please Choose valid DOB";
            return false;
        }
        else{
            for (var i = d.length - 1; i >= 0; i--) {
                if(!(d.charAt(i)==' ')){
                    if(isNaN(d.charAt(i))){
                        document.getElementById('dob_error').innerHTML="* Please enter valid DOB";
                        return false;
                    }
                }

            }
            return true;

        }
    }
    function checkEmail(){

        document.getElementById('email_error').innerHTML="";
        var email=document.getElementById('email').value;
        if(email==""){
                document.getElementById('email_error').innerHTML="* Pleaes enter email";
                return false;
        }
        else{
        if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
            return true;
        }
        else{
                document.getElementById('email_error').innerHTML="* Pleaes enter valid email";
                return false;
        }
    }
    }
    function checkMobile(){
            var mbl=document.getElementById('mobile').value;
            document.getElementById('mobile_error').innerHTML="";
            if(mbl==""){
                document.getElementById('mobile_error').innerHTML="* Enter your mobile number";
                return false;
            }
            else if(mbl.length==10||mbl.length==12){
                
                for(var i=0;i<mbl.length;i++){
                    if(isNaN(mbl.charAt(i))){
                            document.getElementById('mobile_error').innerHTML="* Please enter valid mobile number";
                            return false;
                    }
                }
                return true;
            }
            else{
                document.getElementById('mobile_error').innerHTML="* Please enter valid mobile number";
                return false;
            }
    }
    function checkDetails(){
        document.getElementById('year_error').innerHTML="";
        document.getElementById('branch_error').innerHTML="";
        var year=document.getElementById('year').value;
        if(year==""){
                document.getElementById('year_error').innerHTML="* Choose your year";
                return false;
        }
        else{
            
            if(year=='PUC-II'||year=='PUC-I'){
                    alert('PUC');
                    return true;
            }
            else{
                    var b=document.getElementById('branch').value;
                    
                    if(b==""){
                            document.getElementById('branch_error').innerHTML="* Please choose your branch";
                            return false;
                    }
                    return true;
            }
        }

    }
    function checkClass(){
            document.getElementById('class_error').innerHTML="";
            var cla=document.getElementById('class').value;
            if(cla==""||cla.length<6){
                    document.getElementById('class_error').innerHTML="* Please enter your class";
                    return false;
            }
            else
                return true;


    }
    function checkPassword() {
        var pass=document.getElementById('p_password').value;
        document.getElementById('pass1_error').innerHTML="";
        if(pass==""){
                    document.getElementById('pass1_error').innerHTML="* Please enter your password";
                    return false;
        }
        else if(pass.length<4){
                    document.getElementById('pass1_error').innerHTML="* Password should contain atleast 4 characters";
                    return false;
        }
        else
            return true;
    }
    function checkPassword2() {
        var pass=document.getElementById('c_password').value;
        document.getElementById('pass2_error').innerHTML="";
        if(pass==""){
                    document.getElementById('pass2_error').innerHTML="* Please enter your password";
                    return false;
        }
        else if(pass.length<4){
                    document.getElementById('pass2_error').innerHTML="* Password should contain atleast 4 characters";
                    return false;
        }
        else{
            var p=document.getElementById('p_password').value;
            if(p!=pass){
                    document.getElementById('pass2_error').innerHTML="* Passwords are not same";
                    return false;
            }        
            else
                return true;
        }
    }
	</script>
</head>
<body>
    <?php include('head.php');?>
    <div class="row">
    <div class="alert alert-info">Faculty Id must have prefix as RCS for Computer Sceince or REC for ECE or RMM for MME or RME for Mech RCH for chemical or RCE for Civil</div>
    <div class="col-lg-offset-4 col-lg-5 form">
            <form id="form" name="form" action="SaveSignUpDetails.php" method="post" >
            <table align="center" width="100%"  cellpadding="20px">
            	<tr>
            		<td><label for="name">Name:</label></td>
            		<td><input class="form-control" id="name" name="name" placeholder="Enter your full name" onblur="checkName()"></td>	
            	</tr>
            	
            	<tr><td colspan="2" style="text-align:right"><span id="name_error"></span><br></td></tr>
            	
            	<tr>
            		<td><label for="sid">ID No:</label></td>
            		<td><input class="form-control" id="sid" name="sid" placeholder="Enter your id" onblur="checkID()" ></td>	
            	</tr>
            	<tr><td colspan="2" style="text-align:right" ><span id="id_error"></span><br></td></tr>
            	<tr>
            		<td><label for="dob">DoB:</label></td>
            		<td><input class="form-control" id="datepicker" name="dob" placeholder="Select your DoB" ></td>	
            	</tr>
            	<tr><td colspan="2" style="text-align:right" ><span id="dob_error"></span><br></td></tr>
            	<tr>
            		<td><label for="email">E-mail id:</label></td>
            		<td><input class="form-control" id="email" name="email" placeholder="Enter your E-mail id" onblur="checkEmail()"></td>	
            	</tr>
                <tr><td colspan="2"  style="text-align:right"><span id="email_error"></span><br></td></tr>
                <tr>
                    <td><label for="p_password">Password</label></td>
                    <td><input  type="password"  class="form-control" id="p_password" name="p_password" placeholder="Enter your password" onblur="checkPassword()"></td>  
                </tr>
                <tr><td colspan="2"  style="text-align:right"><span id="pass1_error"></span><br></td></tr>
                <tr>
                    <td><label for="c_password">Confirm Password</label></td>
                    <td><input type="password" class="form-control" id="c_password" name="c_password" placeholder="Confirm your password" onblur="checkPassword2()"></td>  
                </tr>
                <tr><td colspan="2"  style="text-align:right"><span id="pass2_error"></span><br></td></tr>
				
            	<tr>
            		<td><label for="mobile">Mobile No:</label></td>
            		<td><input class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" onblur="checkMobile()"></td>	
            	</tr>  
            	<tr><td colspan="2" style="text-align:right"><span id="mobile_error"></span><br></td></tr>
            	<tr>
            		<td><label >Choose:</label></td>
            		<td><input type="radio" value="student" name="identity" checked onchange="callChange()"> Student&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" value="faculty" name="identity"  onchange="callChange()"> Faculty</td>	
            	</tr> 
            	<tr><td colspan="2" ><br></td></tr>
            	<tr id="tr1">
            		<td><label for="year">Year:</label></td>
            		<td><select class="form-control" id="year" name="year" onchange="callFuntion()" >
            					<option value="">Select your year</option>
			            		<option value="PUC-I">PUC-I</option>
			            		<option value="PUC-II">PUC-II</option>
            					<option value="E1">E1</option>
            					<option value="E2">E2</option>
            					<option value="E3">E3</option>
            					<option value="E4">E4</option>
            				</select>
            		</td>	
            	</tr> 
            	<tr><td colspan="2" style="text-align:right"><span id="year_error"></span><br></td></tr>
            	<tr id="tr2">
            		<td><label for="branch">Branch:</label></td>
            		<td><select class="form-control" id="branch" name="branch" onchange="callFuntion()">
           		        		<option value="">Select your branch</option>
			            		<option value="CSE">CSE</option>
			            		<option value="ECE">ECE</option>
            					<option value="ME">ME</option>
            					<option value="MME">MME</option>
            					<option value="CIVIL">CIVIL</option>
            					<option value="CE">CE</option>
            				</select>
            		</td>	
            	</tr>
            	<tr><td colspan="2" style="text-align:right"><span id="branch_error"></span><br></td></tr>

                <tr id="tr3">
                    <td><label for="class">Class:</label></td>
                    <td><input type="text" id="class" name="class" class="form-control" placeholder="Ex: ABI-007" onblur="checkClass()">
                    </td>   
                </tr>
                <tr><td colspan="2" style="text-align:right"><span id="class_error"></span><br></td></tr>    


            	<tr>
            		<td><input type="button" class="btn  btn-success btn-sm register" value="Register" onclick="validateAll()"></td>
            		<td><input type="reset" class="btn btn-info btn-sm reset" value="Reset"></td>
            	</tr> 
            	          	
            	
            </tr>
            </table>
           </form>
        </div> 
           

    </div>
</div>
</body>
</html>
