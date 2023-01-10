<?php

$n = (int)readline();

for ($i = 1; $i <= $n; $i++) {
    $entrada = readline();
    $entrada = explode(' ', $entrada);

    $x = intval($entrada[0]);
    $y = intval($entrada[1]);

    if ($x == $y) {
        $soma_impares = 0;
    }

    if ($x < $y) {
        $soma_impares = 0;
        $y = $y - 1;
        while ($x < $y) {
            $x = $x + 1;
            if ($x % 2 != 0) {
                $soma_impares = $soma_impares + $x;
            }
        }
    }

    if ($y < $x) {
        $soma_impares = 0;
        $x = $x - 1;
        while ($y < $x) {
            $y = $y + 1;
            if ($y % 2 != 0) {
                $soma_impares = $soma_impares + $y;
            }
        }
    }
    echo "$soma_impares\n";
}
