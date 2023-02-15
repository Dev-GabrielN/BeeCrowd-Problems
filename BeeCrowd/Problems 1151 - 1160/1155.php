<?php

/*
Escreva um algoritmo para calcular e escrever o valor de S, sendo S dado pela fórmula:
S = 1 + 1/2 + 1/3 + … + 1/100

Entrada
Não há nenhuma entrada neste problema.

Saída
A saída contém um valor correspondente ao valor de S.
O valor deve ser impresso com dois dígitos após o ponto decimal.
*/

// Algoritmo gerado com CHAT GPT.

$s = 0;

for ($i = 1; $i <= 100; $i++) {
    $s += (1 / $i);
}
$s = number_format($s, 2, '.', '');
echo "$s\n";
