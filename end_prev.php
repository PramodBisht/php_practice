<?php 
	$array = array(1, 2, 3);
	$value=end($array);
	while($value){
		echo $value."<br>";
		$value=prev($array);
	}
	$value=reset($array); //set the pointer to first element
	while ($value) {
		echo "$value"."<br>";
		$value=next($array);
		# code...
	}
	reset($array);
	echo current($array)."<br>";
	echo pos($array);

?>