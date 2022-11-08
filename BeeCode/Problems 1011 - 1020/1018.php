<?php 

$valor = (int)readline();

echo "$valor\n";
echo  intval($valor / 100)." nota(s) de R$ 100,00"."\n";
$valor = ($valor % 100);

echo intval($valor / 50) . " nota(s) de R$ 50,00"."\n";
$valor = ($valor % 50);

echo intval($valor / 20) . " nota(s) de R$ 20,00"."\n";
$valor = ($valor % 20);

echo intval($valor / 10) . " nota(s) de R$ 10,00"."\n";
$valor = ($valor % 10);

echo intval($valor / 5) . " nota(s) de R$ 5,00"."\n";
$valor = ($valor % 5);

echo intval($valor / 2) . " nota(s) de R$ 2,00"."\n";
$valor = ($valor % 2);

echo intval($valor / 1) . " nota(s) de R$ 1,00"."\n";
