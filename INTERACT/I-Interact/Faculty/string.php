<?php
include('mysql.php');
$query="SELECT * FROM assignment WHERE student_id='B121250' and assignment='assignment3' and subject='JAVA'";
$result=mysql_query($query);

//echo mysql_error();
$row=mysql_fetch_array($result);
//echo $row[7];
$str="Naveen Kumar";
$str1=substr($str, -3);
//echo $str1;
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
$str=substr($row[7],1);
echo $root.$str;
$open=fopen("naveen.txt", "r");

?>