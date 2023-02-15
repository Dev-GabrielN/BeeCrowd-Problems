<?php

$num_1 = (float)readline();
$num_2 = (float)readline();
$num_3 = (float)readline();
$num_4 = (float)readline();
$num_5 = (float)readline();

$pares = 0;

if ($num_1 % 2 == 0) {
    $pares = $pares + 1;
}
if ($num_2 % 2 == 0) {
    $pares = $pares + 1;
}
if ($num_3 % 2 == 0) {
    $pares = $pares + 1;
}
if ($num_4 % 2 == 0) {
    $pares = $pares + 1;
}
if ($num_5 % 2 == 0) {
    $pares = $pares + 1;
}

echo "$pares valores pares\n";
