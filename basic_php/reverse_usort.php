<?php 
	$products = array( array( 'TIR', 'Tires', 100 ),
						array( 'OIL', 'Oil', 10 ),
						array( 'SPK', 'Spark Plugs', 4 ) );
	print_r($products);
	function compare($x, $y) {
		if ($x[1] == $y[1]) {
			return 0;
		} else if ($x[1] < $y[1]) {
			return 1;
		} else {
			return -1;
		}
	}
	echo "<br>";
	usort($products, 'compare');
	print_r($products);


?>