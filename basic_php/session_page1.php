<?php 
session_start();
$_SESSION['ses']="Hello World";
echo 'The content of session variable \'ses\' is '.$_SESSION['ses']."<br>";


?>

<a href="session_page2.php">next page</a>