<?php

$idade_dias = (int)readline();

$idade_anos = intval($idade_dias / 365);
$idade_meses = intval(($idade_dias % 365) / 30);
$idade_dias_30 = intval(($idade_dias % 365) % 30);

echo $idade_anos . " ano(s)\n";
echo $idade_meses . " mes(es)\n";
echo $idade_dias_30 . " dia(s)\n";
