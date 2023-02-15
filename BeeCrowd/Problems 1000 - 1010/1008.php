<?php 

$id_funcionario = (int)readline();
$horas_trabalhadas = (int)readline();
$valor_por_hora = (float)readline();

$salario = $horas_trabalhadas * $valor_por_hora;
$salario = number_format($salario, 2, '.', '');

echo 'NUMBER = ' . $id_funcionario . "\n";
echo 'SALARY = U$ ' . $salario . "\n";
