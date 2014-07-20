<?php 
	$array=array(1,2,3);
	function my_print($value){
		echo $value."<br>";
	}

	function multiply(&$value,$key,$factor){ //we can ignore the $key
		echo "results are ".$value*$factor."<br>";
	}
	array_walk($array, 'my_print');
	echo nl2br("\n\n");
	array_walk($array, 'multiply',3);


?>