<?php
function alphabeticalOrder($str) {
    $chars = str_split($str);
    sort($chars);
    return implode('', $chars);
}
echo "Начальная строка: alphabetical\n" . "Начальная строка в алфавитном порядке: ";
echo alphabeticalOrder('alphabetical'); 