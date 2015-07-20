<?php
function humanizedList($array){
	$lastitem = array_pop($array);
	$newString = implode(', ', $array);
	return $newString . ', and ' . $lastitem;
 }
 // List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsString = explode(', ', $physicistsString);

$famousFakePhysicists = humanizedList($physicistsString);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;


sort($physicistsString);
print_r($physicistsString);