<?php
function duplicateCount($text) {
        $result=0;
    $text=strtolower($text);
    $text=str_split($text);
    $text=array_count_values($text);
    foreach ($text as $value){
        if ($value>1){
            $result++;
        }
    }
    return $result;
}