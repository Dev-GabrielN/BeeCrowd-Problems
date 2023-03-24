<?php

/*
Odin criou para Thor a mais fiel e poderosa arma possível, o martelo Mjölnir. Feito de um minério
místico especial chamado Uru e forjado no coração de uma estrela pelos Deuses ferreiros de Asgard,
Brokk e Eitri, os lendários ferreiros.

Um dia, Thor desafiou seus amigos para ver quem conseguia levantar o Mjölnir.

Escreva um programa que, dado um nome, e a força, em Newtons, aplicado ao tentar levantar o Mjölnir, 
informar se a pessoa conseguiu ou não levantá-lo.

Entrada
Um número inteiro C será informado, que será a quantidade de casos de teste. Cada caso de teste inicia 
com uma palavra, que é o primeiro nome de quem está tentando levantar o Mjölnir, e um inteiro 
N (1 ≤ N ≤ 25000), indicando a força aplicada para cima, em Newtons, ao puxar o martelo, de modo a 
tentar levantá-lo.

Saída
Para cada caso de teste imprima um caractere ‘Y’, caso a pessoa tenha conseguido levantar , ou ‘N’, 
caso não tenha conseguido.
*/

# Quantidade de testes a serem feitos.
$tests = (int) readline();

# Condição que faz o loop pelo número definido na variavel $testes.
for ($i = 0; $i < $tests; $i++) {

    # Recebendo o nome e a força dos desafiados.
    $input = readline();
    $input = explode(' ', $input);

    # Atribuindo o nome e a força em variaveis. 
    $name = $input[0];
    $strength = intval($input[1]);

    # Condição para validar o número de fo7rça.
    while ($strength <= 1 || $strength >= 25000) {
        echo 'Força em Newtons inválida!' . PHP_EOL;
        $strength = (int) readline('Digite um valor acima de 1 e menor que 25000: ');
    }

    # Condição que diz quem pode levantar o Mjölnir.
    if ($name == 'Thor') {
        echo 'Y' . PHP_EOL;
    } else {
        echo 'N' . PHP_EOL;
    }
}
