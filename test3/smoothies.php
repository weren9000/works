<?php
// //функция целочисленного деления без остатка с округлением в меньшую сторону
function smoothies($n, $m)
{

    $result = floor($n / floor($m));
    return $result;
}
