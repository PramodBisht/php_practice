<?php 
function good(){
	echo "running";
}

eval ("echo 'printf';");
test() or die(good());
exit("scripting is exiting ");
echo "will not run";

?>