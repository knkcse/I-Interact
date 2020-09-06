<?php
echo "Naveen";
$link=mysql_connect("localhost","root","") or die("Deid");
mysql_select_db("INTERACT");
$query="SELECT * FROM tbl";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
	echo $row[1].'<br>';



?>