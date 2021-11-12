<?php
// RageEx regular expression CTF - By Eldar "Wireghoul" Marcussen 
DEFINE('BASEPATH', '.');
include("Security.php");

/****
 * https://github.com/bcit-ci/CodeIgniter/blob/develop/system/core/Security.php#L543
 *
 * $str = preg_replace(
                '#(alert|prompt|confirm|cmd|passthru|eval|exec|expression|system|fopen|fsockopen|file|file_get_contents|readfile|unlink)(\s*)\((.*?)\)#si',
                '\\1\\2&#40;\\3&#41;',
                $str
    );
 ***/

$security = new CI_Security('UTF-8');
echo "test() => ".$security->xss_clean("test()")."\n";
echo "eval() => ".$security->xss_clean("eval()")."\n";
echo $_GET['pwn']." => ".$security->xss_clean($_GET['pwn'])."\n";
echo eval($security->xss_clean($_GET['pwn']));
?>
