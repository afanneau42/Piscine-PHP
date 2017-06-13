#!/usr/bin/php
<?PHP

function capitalize($str1)
{
    $i = 0;

    while ($str1[$i])
    {
        if ($str1[$i] >= 'a' && $str1[$i] <= 'z')
            $str1[$i] = $str1[$i] - 'a' + 'A';
        echo $str1[$i];
        $i++;
    }
    return $str1;
}

function compare_weird($str1, $str2)
{
    $i = 0;
    $str1 = strtolower($str1);
    $str2 = strtolower($str2);
    while ($str1[$i] && $str2[$i] && $str1[$i] == $str2[$i])
        $i++;
    if ($str1[$i] && !$str2[$i])
        return 1;
    if (!$str1[$i] && $str2[$i])
        return 0;
    if (ord($str1[$i]) >= 97 && ord($str1[$i]) <= 122 && ord($str2[$i]) >= 97 && ord($str2[$i]) <= 122)
    {
        if (ord($str2[$i]) < ord($str1[$i]))
            return 1;
        return 0;
    }
    else if (ord($str2[$i]) >= 97 && ord($str2[$i]) <= 122)
        return 1;
    else if (ord($str1[$i]) >= 97 && ord($str1[$i]) <= 122)
        return 0;
    if (ord($str2[$i]) >= 48 && ord($str2[$i]) <= 57 && ord($str1[$i]) >= 48 && ord($str1[$i]) <= 57)
    {
        if (ord($str2[$i]) < ord($str1[$i]))
            return 1;
        return 0;
    }
    else if (ord($str2[$i]) >= 48 && ord($str2[$i]) <= 57)
        return 1;
    else if (ord($str1[$i]) >= 48 && ord($str1[$i]) <= 57)
        return 0;
    if (ord($str2[$i]) < ord($str1[$i]))
        return 1;
    return 0;
}

$i = 1;

while ($argv[$i])
{
    $str = $str.$argv[$i]." ";
    $i++;
}
$str = array_filter(explode(" ", $str));
$i = 0;
while ($str[$i] && $str[$i + 1])
{
    if (compare_weird($str[$i],$str[$i + 1]))
    {
        $tmp = $str[$i + 1];
        $str[$i + 1] = $str[$i];
        $str[$i] = $tmp;
        $tmp = NULL; 
        $i = 0;
    }
    else
    {
        $i++;
    }
}
foreach ($str as $elem)
    echo $elem."\n";
?>