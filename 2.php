<?php
$str1='mama mila ramy';
$str2='ramy alim amamd';
function anagramm ($str1,$str2)
{
    $str1_array = str_split($str1);
    $str2_array = str_split($str2);
    sort($str1_array);
    sort($str2_array);
    $dif = array_diff_assoc($str1_array, $str2_array);
    $count_str1 = (count($str1_array));
    $count_str2 = (count($str2_array));
    if ($count_str1 == $count_str2 && count($dif) == 0) {
        echo 'строки являются анаграммами';
    } else {
        echo 'строки не являются анаграммами';
    }
} print anagramm($str1,$str2);