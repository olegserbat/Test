<?php
$str1='mama';
$str2='amam';
$anagram=function ($str1,$str2) {
    $str1_array = str_split($str1);
    sort($str1_array);
    $str2_array = str_split($str2);
    sort($str2_array);
    $count_str1 = (count($str1_array));
    $count_str2 = (count($str2_array));
//var_dump(array_count_values($str1_array));
    $sum=array_diff_assoc($str2_array, $str1_array);
//var_dump($str2_array);
    If ($count_str1=$count_str2 && $sum=0) {
        echo 'маннограм';
    } else {
        echo 'не манограм';
    }
};
print $anagram ($str1,$str2);