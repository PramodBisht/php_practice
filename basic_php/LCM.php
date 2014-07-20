<?php
$a=$_GET['a'];
$b=$_GET['b'];
echo "LCM is ".($a*$b)/gcd($a,$b);
function gcd($a,$b){
	if($b==0){
		return $a;
	}
	return gcd($b,$a%$b);
}
?>