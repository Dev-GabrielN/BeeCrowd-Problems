<?php

while (true) {

    $entrada = readline();
    $entrada = explode(' ', $entrada);
    $x = intval($entrada[0]);
    $y = intval($entrada[1]);

    if ($x > 0 && $y > 0) {
        echo "primeiro\n";
    } else if ($x < 0 && $y > 0) {
        echo "segundo\n";
    } else if ($x < 0 && $y < 0) {
        echo "terceiro\n";
    } else if ($x > 0 && $y < 0) {
        echo "quarto\n";
    }
    if ($x == 0 || $y == 0) {
        break;
    }
}
