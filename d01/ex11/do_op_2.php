#!/usr/bin/php
<?PHP

function trim_all($str)
{
    $str = trim($str);
    $str = trim($str, '\t');
    return $str;
}

if ($argc != 2)
{
    echo "Incorrect Parameters\n";
    return ;
}
$i = 0;
while ($argv[1][$i] == ' ' || $argv[1][$i] == '\t')
    $i++;
while (is_numeric($argv[1][$i]) == 1 || $argv[1][$i] == '-')
{
    $o1 = $o1.$argv[1][$i];
    $i++;
}

while ($argv[1][$i] == ' ' || $argv[1][$i] == '\t')
    $i++;
if ($argv[1][$i] == '+' || $argv[1][$i] == '-' || $argv[1][$i] == '/' || $argv[1][$i] == '*' || $argv[1][$i] == '%')
 {
    $o2 = $argv[1][$i];
    $i++;
 }
while ($argv[1][$i] == ' ' || $argv[1][$i] == '\t')
    $i++;
while (is_numeric($argv[1][$i]) || $argv[1][$i] == '-')
{
    $o3 = $o3.$argv[1][$i];
    $i++;
}
while ($argv[1][$i] == ' ' || $argv[1][$i] == '\t')
    $i++;
if (strlen($argv[1]) != $i)
{    
    echo "Syntax Error\n";
    return ;
}
if ($o2 == '+')
    echo $o1 + $o3."\n";
if ($o2 == '-')
    echo $o1 - $o3."\n";
if ($o2 == '/' && $o3[0] != 0)
    echo $o1 / $o3."\n";
if ($o2 == '*')
    echo $o1 * $o3."\n";
if ($o2 == '%' && $o3[0] != 0)
    echo $o1 % $o3."\n";
?>