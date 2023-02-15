<?php

while (true) {

    $nota_1 = (float)readline();
    if ($nota_1 < 0.0 || $nota_1 > 10.0) {
        while ($nota_1 < 0 || $nota_1 > 10.0) {
            echo "nota invalida\n";
            $nota_1 = (float)readline();
        }
    }

    $nota_2 = (float)readline();
    if ($nota_2 < 0 || $nota_2 > 10.0) {
        while ($nota_2 < 0 || $nota_2 > 10.0) {
            echo "nota invalida\n";
            $nota_2 = (float)readline();
        }
    }

    $media = 0.00;
    $soma = ($nota_1 + $nota_2);
    $media = ($soma / 2);
    $media = number_format($media, 2, '.', '');

    echo "media = $media\n";

    $x = 3;
    if ($x != 1 || $x != 2) {
        while (true) {
            echo "novo calculo (1-sim 2-nao)\n";
            $x = (int)readline();
            if ($x === 1 || $x === 2) {
                break;
            }
        }
    } else if ($x === 1) {
        continue;
    }

    if ($x === 2) {
        break;
    }
}
