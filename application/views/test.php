<?php

$list = array(1,2,3,4,5);
$list2 = array('b'. 'x');

for($i=0; $i<count($list); $i++){
	echo $list[$i];
}

if(isset($_POST['button'])){
	$controller->hello();
}


?>
<form method="post">
	<button type="submit" name="button">button1</button>
</form>
