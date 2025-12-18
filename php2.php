<?php
function isPerfectNumber($num) {
    if ($num <= 0) {
        return false;
    }
    $sum = 0;

    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $num;
}

function findPerfectNumbers($array) {
    $result = [];
    foreach ($array as $num) {
        if (isPerfectNumber($num)) {
            $result[] = $num;
        }
    }
    return $result;
}


$numbers = [6, 28, 12, 16, 5, 7, 496];
echo "Числа в массиве: ";
print_r($numbers);
$perfectNumbers = findPerfectNumbers(array: $numbers);
echo "Идеальные и Совершенные числа: ";
print_r($perfectNumbers);