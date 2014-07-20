<?php 
class employee{
	var $name;
	var $employee_id;

}

$this_emp=new employee;
$this_emp->name='test';
$this_emp->employee_id="23";
$serial=serialize($this_emp);
echo $serial."<br>";
$unserial= unserialize($serial);
echo $unserial;



?>