<?php
// RageEx regular expression CTF - By Eldar "Wireghoul" Marcussen 
//Validate input
$safe = preg_replace('/[^A-z,* ]/','', $_GET['columns']);
echo "$safe\n";

$db = mysqli_connect("localhost","root","toor","mydb");
// Escape output
$query = "select `".mysqli_real_escape_string($db, $safe)." from user";
$res = mysqli_query($db, $query);
$data = mysqli_fetch_array($res);
print_r($data);
?>
