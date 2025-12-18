<?php
function alphabeticalOrder($str): string {
    $chars = str_split($str);
    sort($chars);
    return implode(separator: '', array: $chars);
}
echo "Начальная строка: alphabetical\n" . "Начальная строка в алфавитном порядке: ";
echo alphabeticalOrder(str: 'alphabetical'); 