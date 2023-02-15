<?php
/*
Escreva um programa que leia dois valores X e Y. A seguir, mostre uma sequência de 1 até Y, passando para a próxima linha a cada X números.

Entrada
O arquivo de entrada contém dois valores inteiros, (1 < X < 20) e (X < Y < 100000).

Saída
Cada sequência deve ser impressa em uma linha apenas, com 1 espaço em branco entre cada número, conforme exemplo abaixo. Não deve haver espaço em branco após o último valor da linha.
*/

$entrada = readline();
$entrada = explode(' ', $entrada);

$x = intval($entrada[0]);
$y = intval($entrada[1]);
$num = 1;

$linhas = ($y / $x);

for ($i = 1; $i < $linhas + 1; $i++) {
    $j = 1;
    if (1 < $x && $x < 20) {
        for (; $j < $x; $j++) {
            echo "$num ";
            $num++;
            if ($num > $y) {
                break;
            }
        }
        if ($num > $y) {
            break;
        }
        echo "$num\n";
        $num++;
        if ($num > $y) {
            break;
        }
    }
}

// Esse me deu trabalho... 