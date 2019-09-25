<?php
//Функция добавления префикса к словам
function mathprefix($prefix, $words)
{
    foreach ($words as $word) {
        $prefixwords[] = $prefix . $word;
    }
    return $prefixwords;
}
