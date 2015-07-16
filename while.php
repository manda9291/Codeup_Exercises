<?php
	$test = 5;
	$firstCondition = 2;
	$secondCondition = 4;

	while ($test <=15){
		echo $test . PHP_EOL;
		$test+=1;
		if ($test % $firstCondition == 0 && $test % $secondCondition){
		echo "$test is divisible by both {$firstCondition}and{$secondCondition}";
		}if ($test % $secondCondition == 0) {
			echo "$test is divisible by $secondCondition" .PHP_EOL;
		}
		echo $test.PHP_EOL;

	}
?>


