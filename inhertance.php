<?php 
class A{
 	public  $attribute1;
	function operation1(){
		echo $this->attribute1."<br>";
	}
}
class B extends A{
	public $attribute2;
	function operation2(){
		echo $this->attribute1+$this->attribute2;
	}
}

$b=new B();
$b->attribute1=10;
$b->attribute2=20;
$b->operation1();
$b->operation2();	
?>