<?php 
$n=$_GET['n'];
$arr= array();
$arr[0]=1;
$arr[1]=1;
$result=0;
if($n==1){
	echo $arr[0];
}
if($n==2){
	echo $arr[1];
}
else{
	for($i=2;$i<$n;$i++){
		$arr[$i]=$arr[$i-1]+$arr[$i-2];
	}
	echo $arr[$n-1];
}




?>