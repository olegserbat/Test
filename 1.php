<?php
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

/*function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}
*/
$a = array(1, 2, 3, 4, 5, 8, 10);
//$x = array();
$result = array_reduce($a, function ($subSum, $val) {
    echo ("currenct subsum is $subSum; current array value is $val \n");
    return $subSum += $val;
});

var_dump($result);
//var_dump(array_reduce($a, "sum",));