<?php
$str1='mama mila';
$str2='ilma mama';
$str1_array=str_split($str1);
$str2_array=str_split($str2);
$count_str1=(count($str1_array));
$count_str2=(count($str2_array));
$compare_str=array_diff($str1_array, $str2_array);
If ($count_str1==$count_str2 && count ($compare_str)==0) {
    echo 'строки являются анаграммами';
} else {
    echo 'строки не являются анаграммами';
}

