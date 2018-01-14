<?php

/*
 * This file was created by Benjamin Ditel - 2018
 * https://github.com/diteljuice/export-php-ini
 * Use it as you like, but please keep this copyright
 */

$allConf = ini_get_all();
$file = 'php.ini';

if(file_exists($file)) {
	unlink($file);
}
if(!file_exists($file)) {
	touch($file);
}

foreach ($allConf as $key => $val) {
	$lineToFile = $key . " = " . $val['local_value'] . ";";
	file_put_contents($file,$lineToFile.PHP_EOL, FILE_APPEND | LOCK_EX);
}

?>
