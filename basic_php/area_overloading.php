<?php
class Area{
	public $area;
	function __construct(){
		$area=0;
		echo "object created area is $area <br>";
	}
	function find_area(){
		$no_of_argument=func_num_args();
		if($no_of_argument==1){
			echo "it is for circle";
			$area=3.14*func_get_arg(0)*func_get_arg(0);
			echo $area;
		}
		if($no_of_argument==2){
			echo "it is rectangle(or square)";
			//echo $
			$area=func_get_arg(0)*func_get_arg(1);
			echo $area;
		}
		if($no_of_argument==3){
			echo "it is triangle so use hero's formula";
			$s=(func_get_arg(0)+func_get_arg(1)+func_get_arg(2))/2;
			$area=sqrt($s*($s-func_get_arg(0))*($s-func_get_arg(1))*($s-func_get_arg(2)));
			echo $area;
		}else{
			echo "error";
		}

	}
}
$ar=new Area();
$ar->find_area(2,3,4,5);


 ?>