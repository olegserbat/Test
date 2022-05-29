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
$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum",));