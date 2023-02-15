<?php

$entrada = (float)readline();

if ($entrada >= 0.00 && $entrada <= 2000.00) {
    echo "Isento\n";
}
if ($entrada > 2000.00 && $entrada <= 3000.00) {
    $valor = ($entrada - 2000.00);
    $valor = (8 / 100) * $valor;
}
if ($entrada > 3000.00 && $entrada <= 4500.00) {
    $valor = ($entrada - 2000.00);
    $imposto = (8 / 100) * 1000;
    $imposto_resto = ($valor - 1000);
    $imposto_resto = (18 / 100) * $imposto_resto;

    $valor = $imposto + $imposto_resto;
}
if ($entrada > 4500) {
    $imposto = (8 / 100) * 1000;
    $imposto_2 = (18 / 100) * 1500;
    $valor = $entrada - 4500;
    $imposto_resto = (28 / 100) * $valor;
    
    $valor = $imposto + $imposto_2 + $imposto_resto;
}


if ($entrada > 2000.00) {
    $valor = number_format($valor, 2, '.', '');
    echo "R$ $valor\n";
}
