<?php

function addition($a, $b)
{
    return $a + $b;
}

function subtraction($a, $b) {
    return $a-$b;
}

echo addition(10,20)."\n";

echo subtraction(20,10)."\n";

function multiply($a, $b)
{
    return $a * $b;
}

function kpk($a, $b)
{
    if ($a > $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    for ($i = 1; $i < ($a + 1); $i++) {
        if ($a % $i == 0 && $b % $i == 0)
            $fpb = $i;
    }

    $kpk = ($a * $b) / $fpb;
    return $kpk;
}

function add_by_9($a) {
    return $a + 9;
}

function is_odd_number($a) {
    return $a % 2 ? 'odd number':'even number';
}

echo addition(10, 20) . "\n";
echo multiply(10, 20) . "\n";
echo kpk(16, 9) . "\n";
echo add_by_9(10) . "\n";
echo is_odd_number(9);