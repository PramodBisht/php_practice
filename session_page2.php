<?php
session_start();
echo 'The content of $_SESSION[\'sess_var\'] is '.$_SESSION['ses'].'<br />';
unset($_SESSION['sess_var']);
?>
<a href="page3.php">Next page</a>