#!/usr/bin/php
<?PHP

$i = 1;

while ($argv[$i])
{
    $str = $str.$argv[$i]." ";
    $i++;
}
$str = array_filter(explode(" ", $str));
sort($str);
foreach ($str as $elem)
    echo $elem."\n";
?>