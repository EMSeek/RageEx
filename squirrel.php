<?php
// RageEx regular expression CTF - By Eldar "Wireghoul" Marcussen 
$safe = preg_replace('/[^A-z,*]/','', $_GET['columns']);
$query = "select `$safe` from user";
echo "$query\n";

$db = mysqli_connect("localhost","root","toor","mydb");
$res = mysqli_query($db, $query);
$data = mysqli_fetch_array($res);
print_r($data);
?>
