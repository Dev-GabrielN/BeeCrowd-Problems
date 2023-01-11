<?php

/* 
Leia um conjunto não determinado de pares de valores M e N 
(parar quando algum dos valores for menor ou igual a zero). 
Para cada par lido, mostre a sequência do menor até o maior e a 
soma dos inteiros consecutivos entre eles (incluindo o N e M). 
*/

for ($i = 1; $i > 0; $i++) {
    $sum = 0;

    $entrada = readline();
    $entrada = explode(' ', $entrada);

    $m = intval($entrada[0]);
    $n = intval($entrada[1]);

    if ($m <= 0 || $n <= 0) {
        break;
    }

    if ($m < $n) {
        while ($m <= $n) {
            $sum = $sum + $m;
            echo "$m ";
            $m = $m + 1;
        }
    } else if ($n < $m) {
        while ($n <= $m) {
            $sum = $sum + $n;
            echo "$n ";
            $n = $n + 1;
        }
    }

    echo "Sum=$sum\n";
}
