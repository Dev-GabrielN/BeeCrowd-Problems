<?php

$vendedor = (string)readline();
$salario_fixo = (double)readline();
$valor_de_vendas_mes = (double)readline();

$comissao = ((15 / 100) * $valor_de_vendas_mes);
$total = $salario_fixo + $comissao;

$total = number_format($total, 2, '.','');

echo "TOTAL = R$ $total\n";
