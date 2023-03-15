<?php
/*
Faça um programa que leia um valor T e preencha um vetor N[1000] com a sequência de valores de 
0 até T-1 repetidas vezes, conforme exemplo abaixo. Imprima o vetor N.

Entrada
A entrada contém um valor inteiro T (2 ≤ T ≤ 50).

Saída
Para cada posição do vetor, escreva "N[i] = x", onde i é a posição do vetor e x é o valor 
armazenado naquela posição.
*/

# Define a sequência de valores de 0 até a variavel $t.
$t = (int) readline();
while ($t <= 2 || $t >= 50) {
    echo 'Número invalido. Digite um número entre 3 e 49.' . PHP_EOL;
    $t = (int) readline();
}

# Define o vetor que ira pecorrer de 0 até 1000.
$n = array();
# Define o inicio da sequência dos valores.
$j = 0;

# Inicio do programa.
for ($i = 0; $i < 1000; $i++) {
    # O vetor irá receber o valor de $j
    $n[$i] = $j;

    # Saída do programa que mostra a posição do vetor e o valor correspondente.
    echo "N[$i] = " . $n[$i] . PHP_EOL;

    # Após o print a sequencia recebe um incremento.
    $j++;

    # Esse IF verifica se o incremento chegou no limite, caso chegue é setado o valor de volta para 0.
    if ($j == $t) {
        $j = 0;
    }
}
