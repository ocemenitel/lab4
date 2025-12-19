<?php
function mostRecent($text): string
{

    $text = mb_substr(string: $text, start: 0, length: 1000);

    $text = mb_strtolower(string: $text);

    $text = preg_replace( '/[^\w\s]/u',  '', subject: $text);

    $words = preg_split('/\s+/', subject: $text, limit: -1, flags: PREG_SPLIT_NO_EMPTY);

    $counts = [];
    foreach ($words as $word) {
        if (isset($counts[$word])) {
            $counts[$word]++;
        } else {
            $counts[$word] = 1;
        }
    }

    $maxCount = max($counts);

    $maxWords = array_keys(array: $counts, filter_value: $maxCount);

    return end(array: $maxWords);
}
$texxt = "Расскажите про покупки! - Про какие про покупки? 
Про покупки, про покупки, про покупочки свои.\n";
echo $texxt;
$OftenWords = mostRecent(text: $texxt);
echo "Самое часто встречающиеся слово: '$OftenWords'";
