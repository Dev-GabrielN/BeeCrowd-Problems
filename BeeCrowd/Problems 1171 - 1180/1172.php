<?php

/* 
Faça um programa que leia um vetor X[10]. Substitua a seguir, 
todos os valores nulos e negativos do vetor X por 1. Em seguida
mostre o vetor X.

Entrada
A entrada contém 10 valores inteiros, podendo ser positivos ou
negativos.

Saída
Para cada posição do vetor, escreva "X[i] = x", onde i é a posição 
do vetor e x é o valor armazenado naquela posição.
*/

# Primeira ideia.
// $x = array();
// for ($i = 0; $i < 10; $i++) {
//     $input = (int)readline();
//     if ($input <= 0) {
//         $input = 1;
//     }
//     $x[$i] = $input;
//     echo "X[$i] = " . $x[$i] . "\n";
// }

// Lê os valores do vetor X
for ($i = 0; $i < 10; $i++) {
    fscanf(STDIN, "%d", $x[$i]);
}

// Substitui os valores nulos e negativos por 1
for ($i = 0; $i < 10; $i++) {
    if ($x[$i] <= 0) {
        $x[$i] = 1;
    }
}

// Imprime os valores do vetor X
for ($i = 0; $i < 10; $i++) {
    printf("X[%d] = %d\n", $i, $x[$i]);
}
