<?php

$n = (int)readline();

for ($i = 1; $i <= $n; $i++) {
    $reais = readline();
    $lista_reais = explode(" ", $reais);

    $a = floatval($lista_reais[0]);
    $b = floatval($lista_reais[1]);
    $c = floatval($lista_reais[2]);

    $a = $a * 2;
    $b = $b * 3;
    $c = $c * 5;

    $soma = ($a + $b + $c);
    $media = ($soma / 10);
    $media = round($media, 1);
    $media = number_format($media, 1, '.', '');

    echo "$media\n";
}
