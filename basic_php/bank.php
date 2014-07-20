<?php 
$acc_number=0;
class bank{
	private $name,$balance;
	function __construct($name){
		global $acc_number;
		$this->name=$name;
		$this->acc_no=$acc_number+1;
		echo $this->acc_no;
		$acc_number=$this->acc_no;
		$this->balance=1000;
	}
	function deposit($depamount){
		if($depamount>0){
			$this->balance+=$depamount;
			echo "congrats $this->name , $depamount has been credit in your account now your account balance is $this->balance  <br>";
		}

	}
	function enquiry(){
		echo "your current balance is $this->balance <br>";
	}
	function withdraw($withdrawamount){
		if($withdrawamount<=$this->balance){
			$this->balance-=$withdrawamount;
			echo "you have withdraw $withdrawamount now your current balance is $this->balance <br>";
		}
	}


}
$obj=new bank("pramod");
$obj->deposit(100);
$obj->enquiry();
$obj->withdraw(100);





?>