<?php

$n = (int)readline();
$coelho = 0;
$rato = 0;
$sapo = 0;
$total = 0;
for ($i = 1; $i <= $n; $i++) {
    $x = readline();
    $x = explode(' ', $x);

    if ($x[1] == 'C') {
        $coelho = $coelho + $x[0];
    } else if ($x[1] == 'R') {
        $rato = $rato + $x[0];
    } else if ($x[1] == 'S') {
        $sapo = $sapo + $x[0];
    }
}

$total = $coelho + $rato + $sapo;

$coelho_p = ((floatval($coelho) / $total) * 100);
$rato_p = ((floatval($rato) / $total) * 100);
$sapo_p = ((floatval($sapo) / $total) * 100);

$coelho_p = number_format($coelho_p, 2, '.', '');
$rato_p  = number_format($rato_p, 2, '.', '');
$sapo_p = number_format($sapo_p, 2, '.', '');

echo "Total: $total cobaias\n";
echo "Total de coelhos: $coelho\n";
echo "Total de ratos: $rato\n";
echo "Total de sapos: $sapo\n";

echo "Percentual de coelhos: $coelho_p %\n";
echo "Percentual de ratos: $rato_p %\n";
echo "Percentual de sapos: $sapo_p %\n";
