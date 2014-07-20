<?php
class sumtime{
	function __construct(){
		$time1=func_get_arg(0);
		$time2=func_get_arg(1);
		$time3=func_get_arg(2);
		$time4=func_get_arg(3);
		$arr1=split("-", $time1);
		$arr2=split("-", $time2);
		$arr3=split("-", $time3);
		$arr4=split("-", $time4);
		$totalhour=$arr1[0]+$arr2[0]+$arr3[0]+$arr4[0];
		$totalmin=$arr1[1]+$arr2[1]+$arr3[1]+$arr4[1];
		$totalsec=$arr1[2]+$arr2[2]+$arr3[2]+$arr4[2];
		echo "total hours are ".$totalhour;
		echo "<br>total minutes are ".$totalmin;
		echo "<br>total second are ".$totalsec;
	}	
}
$time1=date("g-i-s");
$time2=date("g-i-s");
$time3=date("g-i-s");
$time4=date("g-i-s");
$obj=new sumtime($time4,$time3,$time2,$time1);
?>