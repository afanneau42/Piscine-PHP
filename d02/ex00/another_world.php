#!/usr/bin/php
<?PHP
$str = preg_filter( '/[ \t]+/', ' ' , $argv[1]);
$str = preg_filter( '/^[ \t]*/', '' , $str);
$str = preg_filter( '/[ \t]*$/', '' , $str);
echo $str."\n";
?>