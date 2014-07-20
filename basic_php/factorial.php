<?php 
$temp1=$_GET['var'];
$temp2=1;
for($i=1;$i<=$temp1;$i++){
	$temp2=($i*$temp2)%10;
}
echo $temp2;




?>