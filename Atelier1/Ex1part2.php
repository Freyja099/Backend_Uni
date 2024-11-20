<?php
function fun($x , $y)
{
    if ($y == 0 )
    return 1;
    else
    return $x * fun($x , $y - 1); 
}

$res = 0;

for ($i = 0; $i < 2; $i++)
{
    $res += fun(2,3);
}
echo fun ($res , 2) / 16;
?>

