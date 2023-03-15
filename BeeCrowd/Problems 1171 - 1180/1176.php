<?php

/*
Faça um programa que leia um valor e apresente o número de Fibonacci correspondente a este 
valor lido. Lembre que os 2 primeiros elementos da série de Fibonacci são 0 e 1 e cada próximo 
termo é a soma dos 2 anteriores a ele. Todos os valores de Fibonacci calculados neste problema 
devem caber em um inteiro de 64 bits sem sinal.

Entrada:
A primeira linha da entrada contém um inteiro num_tests, indicando o número de casos de teste. 
Cada caso de teste contém um único inteiro n (0 ≤ n ≤ 60), correspondente ao n-ésimo termo da 
série de Fibonacci.

Saída:
Para cada caso de teste da entrada, imprima a mensagem "Fib(n) = X", onde X é o n-ésimo termo 
da série de Fibonacci.
*/

# Função que calcula o n-ésimo número fibonacci.
function fibonacci(int $index): int
{
    # A sequência de Fibonacci começa com 0 e 1.
    $fibonacci = [0, 1];

    # Calcula os números seguintes até chegar ao número desejado.
    while (count($fibonacci) - 1 < $index) {
        $fibonacci[] = $fibonacci[count($fibonacci) - 2] + $fibonacci[count($fibonacci) - 1];
    }

    # Retorna o número correspondente ao índice informado.
    return $fibonacci[$index];
}

# Lê a quantidade de testes a serem realizados.
$num_tests = (int)readline('Número de testes: ');

# Inicio do loop.
for ($i = 0; $i < $num_tests; $i++) {
    $index = (int)readline('Índice: ');

    # Verifica se o índice é válido.
    if ($index < 0 || $index > 60) {
        echo 'Índice inválido. O valor deve estar entre 0 e 60.' . PHP_EOL;
        continue;
    }
    
    # Calcula o número correspondente ao índice informado e o exibe na tela.
    $fibonacci = fibonacci($index);
    echo "Fib($index) = $fibonacci" . PHP_EOL;
}
