<?php 
class A{

}
class B extends A{

}
$a=new A();
$b=new B();
echo $a instanceof A;
echo $a instanceof B;


?>