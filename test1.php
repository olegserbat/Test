<?php
function getInputData(): array
{
    $file = fopen('result.txt', 'r');
    $countNumb = (int)fgets($file);
    $input = [];
    for ($i = 0; $i < $countNumb; $i++) {
        $input[] = ((int)fgets($file));
    }
    fclose($file);
    return $input;
}

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
$input = getInputData();
for ($k = 0; $k < count($input); $k++) {
    $element_input = str_split(strrev((string)$input[$k]));
    if (isBeautifulNumber($element_input)) {
        $countNiceDigit++;
    }

}
echo "$countNiceDigit красивых чисел ";
