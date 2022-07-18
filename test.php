<?php
function solution(string $s): int
{
    (int)$array = str_split($s);
    $arrayReal = str_split($s);
    (int)arsort($array);
    $arrayBigKeys = array_keys($array, current($array));
    $resultArray = [];
    $a = [];
    $result = 0;
    for ($j = 0; $j < count($arrayBigKeys); $j++) {
        $i = 0;
        while ($i < 5) {
            if (($arrayBigKeys[$j] + $i) < count($arrayReal)) {
                $resultArray[$j][$i] = $arrayReal[$arrayBigKeys[$j] + $i];
                $i++;
            } else {
                break;
            }
        }
        if (implode($resultArray[$j]) > $result) {
            $result = implode ($resultArray[$j]);
            $a = $resultArray[$j];
        };
    };
    (int)$res = implode($a);
    return $res;
}
var_dump( solution("999109999"));