<?php 
$prices = array( 'Tires'=>100 );
$prices['Oil'] = 10;
$prices['Spark Plugs'] = 4; 

	while(list($product,$price)=each($prices)){
		echo "$product -- $price <br/>";
	}
	

?>