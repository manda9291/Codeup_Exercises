<?php
//fgets(STDIN);

fwrite(STDOUT,'Choose a Starting number' . PHP_EOL);
$userMin = intval(fgets(STDIN));

fwrite(STDOUT,'Choose an Ending number' . PHP_EOL);
$userMax = intval(fgets(STDIN));

fwrite(STDOUT,'Choose a Increment number' . PHP_EOL);
$increment = intval(fgets(STDIN)); 

	for ($i = $userMin; $i <= $userMax; $i += $increment) {
	   echo  "$i"  . PHP_EOL;
	}

