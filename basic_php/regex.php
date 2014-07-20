<?php 
class reg{
	function __construct(){
		$email=$_GET['email'];
		if(ereg("^[a-zA-Z0-9_\-\]+@[a-zA-Z0-9]+.[a-zA-Z]+$", $email)){
			echo "this is valid email address";
		}else{
			echo "this is invalid email address;";
		}
	}
}
$in=new reg();

?>