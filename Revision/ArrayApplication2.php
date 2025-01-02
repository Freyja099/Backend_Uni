<?php
$fruits = array('Apple' , 'banana' , 'orange' , 'strawberry');

$position = array_search('orange' , $fruits);
echo $position. '</br>' ;

$position = array_search('strawberry' , $fruits);
echo 'strawberry is at position' .$position. '</br>';

?>