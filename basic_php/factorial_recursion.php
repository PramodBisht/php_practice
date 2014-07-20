<?php 
$temp1=$_GET['var'];
function recursion($n){
	if($n<1){
		return 1;
	}
	else{
		return $n*recursion($n-1);
	}
}
echo recursion($temp1);

?>