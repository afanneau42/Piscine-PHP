#!/usr/bin/php
<?PHP

$i = 1;

$tab = array_filter(explode(" ", $argv[1]));
while ($tab[$i])
{
    echo $tab[$i]." ";
    $i++;
}
if ($tab[0])
    echo $tab[0]."\n";
?>