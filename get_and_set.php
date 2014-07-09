<?php 
class test{
	public $attr;
	public function __get($name){
		return $this->$name;
	}
	public function __set($name,$value){
		if($value<5){
		$this->$name=$value;
		}
		else{
			echo "it can't be stored";
		}
	}
}

$a=new test();
$a->$attr=6;
echo $a->__get("attr");

?>