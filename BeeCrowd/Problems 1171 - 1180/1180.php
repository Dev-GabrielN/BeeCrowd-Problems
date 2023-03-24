<?php

/*
Faça um programa que leia um valor N. Este N será o tamanho de um vetor X[N]. A seguir, leia cada um
dos valores de X, encontre o menor elemento deste vetor e a sua posição dentro do vetor, mostrando 
esta informação.

Entrada
A primeira linha de entrada contem um único inteiro N (1 < N < 1000), indicando o número de elementos 
que deverão ser lidos em seguida para o vetor X[N] de inteiros. A segunda linha contém cada um dos N 
valores, separados por um espaço. Vale lembrar que nenhuma entrada haverá números repetidos.

Saída
A primeira linha apresenta a mensagem “Menor valor:” seguida de um espaço e do menor valor lido na entrada.
A segunda linha apresenta a mensagem “Posicao:” seguido de um espaço e da posição do vetor na qual se
encontra o menor valor lido, lembrando que o vetor inicia na posição zero.
*/

# Recebe o tamanho da Array
$tamanho = (int) readline();
# Recebe todos os elementos da array em uma string.
$vetor = readline();
# Separa a string em uma array com diversos elementos.
$vetor = explode(' ', $vetor);
$i = 0;

# Atribuição do primeiro valor para comparar no loop a seguir.
$menor = $vetor[$i];


for (; $i < $tamanho; $i++) {
    # IF que compara todos os valores da array e guarda somente o menor valor.
    if ($vetor[$i] < $menor) {
        $menor = $vetor[$i];
        $posicao = $i;
    }
}

echo 'Menor valor: ' . $menor . PHP_EOL;
echo 'Posicao: ' . $posicao . PHP_EOL;
