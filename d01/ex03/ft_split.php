<?PHP

function ft_split($str)
{
    $arr = array_filter(explode(" ", $str));
    if ($str != NULL)
        sort($arr);
    return $arr;
}
?>
