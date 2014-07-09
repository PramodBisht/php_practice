<?php 
$prices = array( 'Tires'=>100 );
$prices['Oil'] = 10;
$prices['Spark Plugs'] = 4;
	while($element=each($prices)){
		echo $element[0]."-".$element[1]."<br>";
	}

?>