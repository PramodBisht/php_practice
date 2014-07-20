<?php 
class A
{
	public $attribute = "default value";
	function operation()
	{
		echo "Something<br />";
		echo "The Value of \$attribute is ". $this->attribute."<br />";
	}
}
class B extends A
{
public $attribute = "different value";
	function operation()
	{
		echo "Something else<br />";
		echo "The value of \$attribute is ". $this->attribute."<br />";
		A::operation(); //call the operation of A class
	}
}
$a = new A();
$a -> operation();
$b = new B();
$b -> operation();


?>