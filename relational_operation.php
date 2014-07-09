<?php 
	$arr = array("1","2");
	$arr2=array("3","2","1");
	$arr3=$arr+$arr2;
		print_r($arr2);
		echo "<br>";
		sort($arr2);  //it sort the array in ascending order
		print_r($arr2);
		if($arr==$arr2){
			echo "they are equal but in different order";
		}
		else{
			echo "did't execute";
		}
?>