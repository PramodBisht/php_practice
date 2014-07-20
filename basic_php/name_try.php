<?php 
class name{
	private $firstname,$lastname;
	function __construct(){
		$this->firstname=$_GET['first'];
		$this->lastname=$_GET['last'];
		try{
		if($this->firstname!=strtoupper($this->firstname)){
			throw new Exception("first name is not at upper case");
			
		}
		if(strlen($this->firstname)==0||strlen($this->lastname)==0){
			throw new Exception("string is empty");
		}
		else{
			echo $this->firstname." ".$this->lastname;
		}
		}
		catch(Exception $e){
			echo "caught exception ".$e->getMessage();
		}
	}

}
$in=new name();



?>