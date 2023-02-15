<?php
/*
Faça um algoritmo para ler um valor A e um valor N. Imprimir a soma de A + i para cada i com os valores (0 <= i <= N-1). Enquanto N for negativo ou ZERO, um novo N(apenas N) deve ser lido.

Entrada
A entrada contém somente valores inteiros, podendo ser positivos ou negativos. Todos os valores estão na mesma linha.

Saída
A saída contém apenas um valor inteiro.
*/
$entrada = readline();
$entrada = explode(' ', $entrada);

$a = intval($entrada[0]);
$n = intval($entrada[1]);
$j = 2;
$result = 0;
while ($n <= 0) {
    $n = intval($entrada[$j]);
    $j++;
}
$i = $n - 1;

for ($x = 0; $x <= $i; $i--) {
    $result = $result + ($a + $i);
}
echo "$result\n";
