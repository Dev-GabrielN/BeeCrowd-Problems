<?php

/*
Ler um número inteiro N e calcular todos os seus divisores.

Entrada
O arquivo de entrada contém um valor inteiro.

Saída
Escreva todos os divisores positivos de N, um valor por linha.
*/

$n = (int)readline();

for ($i = 1; $i <= $n; $i++) {
    if ($n % $i == 0) {
        echo "$i\n";
    }
}
