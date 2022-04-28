<?php
$ip = "192.168.1.1";
$iparr = preg_split ("/\./", $ip);
print "$iparr[0] <br />";
print "$iparr[1] <br />" ;
print "$iparr[2] <br />" ;
print "$iparr[3] <br />" ;

$str = "Vi du ve ham preg_replace 21a321 878"; 
$str = preg_replace("/[0-9]+/", "[2000,231]", $str);
print $str;
?>