<?php 
class arrayclass{
	function __construct(){
		$arr=func_get_arg(0);
		for($i=count($arr)-1;$i>=0;$i--){
			$value= $arr[$i];
			print $value;
		}
	}
}
$arr=array(1,2,3 );
$obj=new arrayclass($arr);
?>