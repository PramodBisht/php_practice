<?php

class interest{
	private $rate=4.0;
	private $principal,$time,$dif;
	public $interest_of_si,$interest_of_ci;
	public function __construct($principal,$time){
		$this->principal=$principal;
		$this->time=$time;
	}
	public function generate_si(){
		$this->interest_of_si=($this->principal*$this->rate*$this->time)/(100);
		return $this->interest_of_si;
	}
	public function generate_ci(){
		$this->interest_of_ci=$this->principal*(100+$this->rate)*$this->time/100;
		return $this->interest_of_ci;
	}
	public function get_difference(){
		if($this->interest_of_si>$this->interest_of_ci){
			echo $this->interest_of_si-$this->interest_of_ci;
		}
		else{
			echo $this->interest_of_ci-$this->interest_of_si;	
		}
	}

}
$in=new interest(20000,2);
echo $in->generate_si()."<br>";
echo $in->generate_ci()."<br>";
$in->get_difference();


?>