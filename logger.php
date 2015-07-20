<?php

function logMessage($logLevel, $message){
$filenameDate = date ("Y-m-d", time());
$filename = 'log-' . $filenameDate . '.log';
$handle = fopen($filename, 'a');
$date  = date ("Y-m-d H-i-s", time());


 fwrite($handle, $date .   " " . $logLevel . ", " . $message . PHP_EOL);   
 fclose($handle);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an error message.");
?>
