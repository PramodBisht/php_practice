<?php 

$x=75;
$y=25;
function add1(){
	$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
}
add1();
echo $z;
unset($z);
echo $z;

?>