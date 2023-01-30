<?php 

/* 
Faça um algoritmo para ler um número indeterminado de dados, contendo cada um, a idade de um indivíduo. O último dado, que não entrará nos cálculos, contém o valor de idade negativa. Calcular e imprimir a idade média deste grupo de indivíduos.

Entrada
A entrada contém um número indeterminado de inteiros. A entrada será encerrada quando um valor negativo for lido.

Saída
A saída contém um valor correspondente à média de idade dos indivíduos.

A média deve ser impressa com dois dígitos após o ponto decimal.
*/

$guardar_idade = 0;
$contar = 0;
while (true) {
    $idade = (int)readline();
    if ($idade < 0) {
        break;
    }
    $guardar_idade = $guardar_idade + $idade;
    $contar++;
}

$result = $guardar_idade / $contar;
$result = number_format($result, 2, '.', '');

echo "$result\n";