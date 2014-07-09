<?php 
	function test(){
		global $var;
		$var="content";
		echo $var."<br>";

	}
	test();
	echo $var;

?>