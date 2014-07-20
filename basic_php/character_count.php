<?php 
function countcharacter($str){
	$lowercase=0;
	$uppercase=0;
	$specialcase=0;
	$numeric=0;
	for($i=0;$i<strlen($str);$i++){
		
		if($str[$i]==strtolower($str[$i])){
			$lowercase++;
		}
		else
		if($str[$i]==strtoupper($str[$i])){
			$uppercase++;
		}else
		if(is_numeric($str[$i])){
			$numeric++;
		}
		else{
			$specialcase++;
		
		}
	}
	echo "no of lower case character are $lowercase";
	echo "<br> no of upper case character are $uppercase";
	echo "<br> no of digits are $numeric";
	echo "<br> no of special character are $specialcase";
}
countcharacter("pramod");
?>