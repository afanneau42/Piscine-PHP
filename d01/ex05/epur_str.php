#!/usr/bin/php
<?PHP

$i = 0;
$j = 0;

$argv = array_filter(explode(" ", $argv[1]));
foreach($argv as $elem)
    $j++;
foreach($argv as $elem)
{
    echo $elem;
    if ($i < $j - 1)
        echo " ";
    else
        echo "\n";
    $i++;
}
?>