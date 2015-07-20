<?php

function parseContacts($filename)
{
    $contacts = array();
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));

foreach ($contentsArray as $key => $contact) {
	$contactArray = explode('\n', $contact);

	$contacts[$key]['name']=$contactArray[0];
	$contacts[$key]['number']=$contactArray[1];
//or
	//$contacts[]=array(
	//	'name'=>$contactArray[0],
	//	'number'=>$contactArray[1],
	//	)

}

return $contacts;
