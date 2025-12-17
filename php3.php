<?php
function mostRecent($text) {

    $text = mb_substr($text, 0, 1000);

    $text = mb_strtolower($text);

    $text = preg_replace('/[^\w\s]/u', '', $text);

    $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

    $counts = [];
    foreach ($words as $word) {
        if (isset($counts[$word])) {
            $counts[$word]++;
        } else {
            $counts[$word] = 1;
        }
    }

    $maxCount = max($counts);

    $maxWords = array_keys($counts, $maxCount);

    return end($maxWords);
}
$texxt = "Расскажите про покупки! - Про какие про покупки? 
Про покупки, про покупки, про покупочки свои.\n";
echo $texxt;
$OftenWords = mostRecent($texxt);
echo "Самое часто встречающиеся слово: '$OftenWords'";