<?php
$input = [6,7,8,9];
function isBeautifulNumber(array $dig): bool
{
    for ($i = 1; $i < count($dig); $i += 2) {
        if ((int)$dig[$i] % 2 !== 0) {
            return false;
        }
    }
    for ($j = 0; $j < count($dig); $j += 2) {
        if ((int)$dig[$j] % 2 === 0) {
            return false;
        }
    }
    return true;
}

$countNiceDigit = 0;
for ($k = 0; $k < count($input); $k++) {
    $element_input = str_split(strrev((string)$input[$k]));
    if (isBeautifulNumber($element_input)) {
        $countNiceDigit++;
    }

}
echo "$countNiceDigit красивых чисел ";
