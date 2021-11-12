<?php
// RageEx regular expression CTF - By Eldar "Wireghoul" Marcussen
//This requires an older version of PHP < 5.5.0

// preg_replace /e is dangerous, prevent harmful characters
$name = preg_replace('/[^A-z \-]/','',$_GET['name']);

print "Hello ".preg_replace('/(.*)/e', 'strtoupper(\\1)', '$name');
?>
