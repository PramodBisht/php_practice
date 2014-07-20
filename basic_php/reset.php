<?php 
$prices = array( 'Tires'=>100 );
$prices['Oil'] = 10;
$prices['Spark Plugs'] = 4; 

	while(list($product,$price)=each($prices)){
		echo "$product -- $price <br/>";
	}
	reset($prices); //without reset second loop will not work basically reset put the counter of each to 0
	while(list($product,$price)=each($prices)){
		echo "$product -- $price <br/>";
	}

?>