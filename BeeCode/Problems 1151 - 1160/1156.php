<?php

/*
Escreva um algoritmo para calcular e escrever o valor de S, sendo S dado pela fórmula:
S = 1 + 3/2 + 5/4 + 7/8 + ... + 39/?

Entrada
Não há nenhuma entrada neste problema.

Saída
A saída contém um valor correspondente ao valor de S.
O valor deve ser impresso com dois dígitos após o ponto decimal.
*/

$s = 0;
$denominador = 1;
for ($i = 1; $i <= 39; $i += 2) {
    $s += $i / $denominador;
    $denominador *= 2;
}
$s = number_format($s, 2, '.', '');
echo "$s\n";
