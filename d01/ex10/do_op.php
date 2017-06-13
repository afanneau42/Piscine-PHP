#!/usr/bin/php
<?PHP
function trim_all($str)
{
    $str = trim($str);
    $str = trim($str, '\t');
    return $str;
}

if ($argc != 4)
{
    echo "Incorrect Parameters\n";
    return ;
}
$str1 = trim_all($argv[1]);
$str2 = trim_all($argv[2]);
$str3 = trim_all($argv[3]);

if ($str2[0] == '+')
    echo $str1 + $str3."\n";
if ($str2[0] == '-')
    echo $str1 - $str3."\n";
if ($str2[0] == '/' && $str3[0] != 0)
    echo $str1 / $str3."\n";
if ($str2[0] == '*')
    echo $str1 * $str3."\n";
if ($str2[0] == '%' && $o3[0] != 0)
    echo $str1 % $str3."\n";
?>