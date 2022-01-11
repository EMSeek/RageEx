<?php
//Basred on https://github.com/python/cpython/pull/17157

$time_start = microtime(true); 
ini_set("pcre.backtrack_limit",-1);
ini_set("pcre.recursion_limit",-1);


//$var = "1-c-1".str_repeat(" ",65506)."x";
$var = $_GET['string'];
echo "\nabout to match: $var\n";
preg_match("/\d+-\w+-\d+(\s*\s*\s*)$/", $var);

$time_end = microtime(true);
$execution_time = ($time_end - $time_start)/60;
echo "\nRuntime: $execution_time\n";
?>
