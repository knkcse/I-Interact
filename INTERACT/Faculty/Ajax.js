function  checkValidation(){

    var id=document.getElementById('username').value;
    var password=document.getElementById('password').value;
    //alert(id+"\t"+password);
   if (id==""||password=="") {
        document.getElementById('error').innerHTML=" * Enter user details";

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
                //alert("Entered");
                document.getElementById('form').submit();
            }
            else{
                document.getElementById('password').value="";
                document.getElementById('username').value="";
                document.getElementById('error').innerHTML="* Invalid user details";
            }


        }

    }
    xmlhttp.open("GET","valid.php?username="+id+"&password="+password,false);

    xmlhttp.send();//sends the request

}
}
