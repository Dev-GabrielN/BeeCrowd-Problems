<?php

/*

Neste problema você deverá ler 15 valores colocá-los em 2 vetores conforme estes valores forem 
pares ou ímpares. Só que o tamanho de cada um dos dois vetores é de 5 posições. Então, cada vez 
que um dos dois vetores encher, você deverá imprimir todo o vetor e utilizá-lo novamente para os 
próximos números que forem lidos. Terminada a leitura, deve-se imprimir o conteúdo que restou em 
cada um dos dois vetores, imprimindo primeiro os valores do vetor impar. Cada vetor pode ser 
preenchido tantas vezes quantas for necessário.

Entrada
A entrada contém 15 números inteiros.

Saída
Imprima a saída conforme o exemplo abaixo.

*/

# Criação dos vetores para armazenar os números pares e ímpares
$par = array();
$impar = array();

# Loop para ler os 15 valores
for ($i = 0; $i < 15; $i++) {
    # Leitura do valor
    $num = (int) fgets(STDIN);

    # Verifica se o valor é par ou ímpar e adiciona ao vetor correspondente
    if ($num % 2 == 0) {
        array_push($par, $num);

        # Se o vetor de pares estiver cheio, imprime seus valores e reinicia o vetor
        if (count($par) == 5) {
            for ($j = 0; $j < 5; $j++) {
                echo "par[{$j}] = {$par[$j]}\n";
            }
            $par = array();
        }
    } else {
        array_push($impar, $num);

        # Se o vetor de ímpares estiver cheio, imprime seus valores e reinicia o vetor
        if (count($impar) == 5) {
            for ($j = 0; $j < 5; $j++) {
                echo "impar[{$j}] = {$impar[$j]}\n";
            }
            $impar = array();
        }
    }
}

# Imprime os valores restantes nos vetores
# Primeiro os valores ímpares, depois os pares
for ($i = 0; $i < count($impar); $i++) {
    echo "impar[{$i}] = {$impar[$i]}\n";
}

for ($i = 0; $i < count($par); $i++) {
    echo "par[{$i}] = {$par[$i]}\n";
}
