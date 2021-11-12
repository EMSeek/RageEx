<?php
// RageEx regular expression CTF - By Eldar "Wireghoul" Marcussen 
$safe = preg_replace('/[^A-z]/','', $_GET['hostname']);
passthru("ping -c 3 $safe 2>&1");
?>
