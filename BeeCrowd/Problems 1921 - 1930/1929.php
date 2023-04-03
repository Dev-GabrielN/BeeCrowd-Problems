<?php

/*
Ana e suas amigas estão fazendo um trabalho de geometria para o colégio, em que precisam formar vários 
triângulos, numa cartolina, com algumas varetas de comprimentos diferentes. Logo elas perceberam que 
não dá para formar triângulos com três varetas de comprimentos quaisquer: se uma das varetas for muito 
grande em relação às outras duas, não dá para formar o triângulo.

Neste problema, você precisa ajudar Ana e suas amigas a determinar se, dados os comprimentos de quatro 
varetas, é ou não é possível selecionar três varetas, dentre as quatro, e formar um triângulo.

Entrada
A entrada é composta por apenas uma linha contendo quatro números inteiros A, B, C e D (1 ≤ A, B, C, D ≤ 100).

Saída
Seu programa deve produzir apenas uma linha contendo apenas um caractere, que deve ser ‘S’ caso seja possível 
formar o triângulo, ou ‘N’ caso não seja possível formar o triângulo.
*/

# Recebe os lados de um triangulo, coloca em uma array e organiza em ordem crescente.
$input = readline();
$input = explode(' ', $input);
sort($input);

$A = intval($input[0]);
$B = intval($input[1]);
$C = intval($input[2]);
$D = intval($input[3]);

# Soma os 2 possiveis lados menores.
$AB = $A + $B;
$BC = $B + $C;

# Compara se os lados menores são maiores do que a possivel base. 
if ($AB > $C || $BC > $D) {
    echo 'S' . PHP_EOL;
} else {
    echo 'N' . PHP_EOL;
}
