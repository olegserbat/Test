<?php
function partlist($arr): array
{
    $sum1[(count($arr) - 2)] = $arr[(count($arr) - 1)];
    for ($j = (count($arr) - 3); $j >= 0; $j--) {
        $sum1[$j] = $arr[$j + 1] . " " . $sum1[$j + 1];
        $sum0[0] = $arr[0];
        for ($i = 1; $i < (count($arr) - 1); $i++) {
            $sum0[$i] = $sum0[$i - 1] . " " . $arr[$i];
        }
        $resultArray = [];
        for ($k = 0; $k < (count($arr) - 1); $k++) {

            $resultArray[$k] = [$sum0[$k], $sum1[$k]];
        }
    }
    return (array)$resultArray;
}

var_dump(partlist(["i", "want", "drink", "one", "cup"]));
