<?php 
$str="Your customer service is good for rich customer";
echo strstr($str, "customer")."<br>";
echo strchr($str,"c")."<br>";
echo strrchr($str, "c")."<br>";
echo stristr($str, "Customer")."<br>"; // it is not case sensitive

$test = "Hello world";
echo strpos($test, "H");



?>