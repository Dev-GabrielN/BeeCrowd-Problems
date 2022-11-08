<?php

echo "\nPeça 1 \n";
$produtos_1 = readline();
$produtos_1 = explode(" ", $produtos_1);

echo "\nPeça 2\n";
$produtos_2 = readline();
$produtos_2 = explode(" ", $produtos_2);

$qnt_1 = intval($produtos_1[1]);
$unitario_1 = floatval($produtos_1[2]);

$qnt_2 = intval($produtos_2[1]);
$unitario_2 = floatval($produtos_2[2]);

$valor_1 = ($qnt_1 * $unitario_1); 
$valor_2 = ($qnt_2 * $unitario_2);

// $valor_1 = $produtos_1[1] * $produtos_1[2];
// $valor_2 = $produtos_2[1] * $produtos_2[2];

$valor_total = ($valor_1 + $valor_2);
$valor_total = number_format($valor_total, 2, '.', '');

echo "\nVALOR A PAGAR: R$ $valor_total\n";
