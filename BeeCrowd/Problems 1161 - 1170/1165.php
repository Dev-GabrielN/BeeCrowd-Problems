<?php

/* 
Na matemática, um Número Primo é aquele que pode ser dividido somente 
por 1 (um) e por ele mesmo. Por exemplo, o número 7 é primo, pois pode 
ser dividido apenas pelo número 1 e pelo número 7.

Entrada
A entrada contém vários casos de teste. A primeira linha da entrada 
contém um inteiro N (1 <= N <= 100), indicando o número de casos de teste 
da entrada. Cada uma das N linhas seguintes contém um valor 
inteiro X (1 < X <= 107), que pode ser ou não, um número primo.

Saída
Para cada caso de teste de entrada, imprima a mensagem 'X eh primo'
ou 'X nao eh primo', de acordo com a especificação fornecida.
*/

$testes = (int)readline();

for ($i = 1; $i <= $testes; $i++) {
    $x = (int)readline();
    $divisores = 0;

    for ($count = 2; $count < $x; $count++)
        if ($x % $count == 0) {
            $divisores++;
        }

    if ($divisores) {
        echo "$x nao eh primo\n";
    } else {
        echo "$x eh primo\n";
    }
}

