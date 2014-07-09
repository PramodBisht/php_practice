<?php
$array = array(4, 5, 1, 2, 3, 1, 2, 1);
$lc=array_count_values($array);
echo var_dump($lc);
echo "<br>";
print_r($lc);
?>