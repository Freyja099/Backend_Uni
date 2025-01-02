<?php
function impair($var){
    return $var % 2 == 1 ;
}

function pair($var){
    return $var % 2 == 0 ;
}

$array1 = array(
    "new1" => 1,
    "new2" => 2,
    "new3" => 3,
    "new4" => 4,
    "new5" => 5
) ;
$array2 = array(1 , 2 , 3 , 4 , 5);

$new_array = array_filter($array1 , "impair");
print_r($new_array);

?>