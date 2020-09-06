<?php
$str="naveen";
//$sry=md5($str);
//echo $sry;
echo '<br>'.crypt($str);
echo '<br>'.crypt(crypt($str));

?>