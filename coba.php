<?php

function addition($a, $b) {
    return $a+$b;
}

function add_sqrt($x) {
    return sqrt($x);
}

echo addition(10,20)."\n";
echo number_format(add_sqrt(20), 2);
