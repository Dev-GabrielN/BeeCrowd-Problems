<?php

/*
Leia um valor X. Coloque este valor na primeira posição de um vetor N[100]. Em cada posição subsequente 
de N (1 até 99), coloque a metade do valor armazenado na posição anterior, conforme o exemplo abaixo. 
Imprima o vetor N.

Entrada
A entrada contem um valor de dupla precisão com 4 casas decimais.

Saída
Para cada posição do vetor N, escreva "N[i] = Y", onde i é a posição do vetor e Y é o valor armazenado 
naquela posição. Cada valor do vetor deve ser apresentado com 4 casas decimais
*/

# Define o valor que será dividido 100 vezes pela metade.
$valor = (float) readline();

# Formata o valor inicial.
$valor = number_format($valor, 4, '.', '');

# Define o vetor.
$n = array();

# Define a quantidade de iterações.
define('LIMITE', 100);

# Começa o programa.
for ($i = 0; $i < LIMITE; $i++) {

    $n[$i] = $valor;
    $valor = $valor / 2;

    # Condição de formatação pedida no problema.
    $n[$i] = number_format($n[$i], 4, '.', '');

    echo "N[$i] = " . $n[$i] . PHP_EOL;
}
