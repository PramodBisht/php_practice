<?php 
class test{
	public $var;
	function __construct($param){
		echo "constructor called with parameter ".$param."<br>";
		$this->var=$param;
		echo $this->var."<br>";
	}
	function __destruct(){
		echo "calling destructor"."<br>";
	}
}

$b=new test("good");
$c=new test("bad");
$a=new test();
?>