<?php 
	$array = array( 'key1' => 'value1', 'key2' => 'value2', 'key3'=> 'value3');
	extract($array, EXTR_PREFIX_ALL, 'my_prefix');
	echo "$my_prefix_key1 $my_prefix_key2 $my_prefix_key3";


?>