<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
	foreach($things as $type){
		if (is_array($things)){
			echo "Array" . PHP_EOL;
		
		foreach ($things as $type) {
			if (is_string($type)){
				echo"{$type}" . PHP_EOL;
			}elseif (is_null($type)){
				echo "{$type}" . PHP_EOL;
			}elseif (is_null($type)){
				echo "{$type}" . PHP_EOL;
			}elseif (is_float($type)){
				echo "{$type}" . PHP_EOL;
			}elseif (is_bool($type)){
				echo "{$type}" . PHP_EOL;
			}
	}
}