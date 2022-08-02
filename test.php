<?php
function moveZeros(array $items): array
{
    $arrayMoveZeros = [];
    foreach ($items as $value) {
        if($value===0.0) {
            $value=0;
            }
        if ($value !== 0) {
            $arrayMoveZeros[] = $value;
        }
    }
    $countZero = count($items) - count($arrayMoveZeros);
    for ($i = 1; $i <= $countZero; $i++) {
        $arrayMoveZeros[] = 0;
    }
    return $arrayMoveZeros;
}

var_dump(moveZeros([9,0.0,0,9,1,2,0,1,0,1,0.00,3,0,1,9,0,0,0,0,9]));