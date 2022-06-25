<?php
$str1 = 'mama';
$str2 = 'mmaaa';
function anagramm(string $str1, string $str2): bool
{
    $str1Array = str_split($str1);
    $str2Array = str_split($str2);
    sort($str1Array);
    sort($str2Array);
    $diff = array_diff_assoc($str1Array, $str2Array);
    return (count($str1Array) === count($str2Array) && count($diff) === 0);
}

//assert(anagramm($str1, $str2));
assert(anagramm('mama', 'mmaa') === true, 'анаграмма');
assert(anagramm('мама', 'ммаа') === true, 'анаграмма');
assert(anagramm('maa', 'mmaa') ===false, 'анаграмма');
assert(anagramm('avvv', 'aaav') === false, 'не является анаграммой, так как буквы отличаются');
assert(anagramm('avvvv', 'aaav') === false, 'не является анаграммой, так как буквы отличаются');
assert(anagramm('avvv', 'aaavv') === false, 'не является анаграммой, так как буквы отличаются');
assert(anagramm('123', '321') === true, 'является анаграммой');
assert(anagramm('123 test', '321 test') === true, 'является анаграммой');
assert(anagramm('123 test', '321 test ') === false, 'не является анаграммой');
assert(anagramm('test', 'fdff') === false, 'не является анаграммой, так как буквы отличаются');