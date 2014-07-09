<?php 
$str="this is string";
$var=strtok($str, " ");
echo $var."<br>";
while($var!=" "){
	$var=strtok(" ");
	echo $var."<br>";
}


?>