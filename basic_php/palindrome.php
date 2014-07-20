<?php 
$str=$_GET['str'];
$j=strlen($str)-1;
$flag=0;
for($i=0;$i<=strlen($str)/2;$i++){
	if($str[$i]!=$str[$j]){
		$flag=1;
	}
	$j--;
}
if($flag==1){
	echo "It is not pallindrome";
}
else{
	echo "It is pallindrome";
}
?>