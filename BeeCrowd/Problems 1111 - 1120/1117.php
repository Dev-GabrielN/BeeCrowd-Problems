<?php

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

$soma = ($nota_1 + $nota_2);
$media = ($soma / 2);
number_format($media, 2, '.', '');

echo "media = $media\n";
