<?php

$salario = (float)readline();


if ($salario <= 400.00) {
    $reajuste = (15 / 100) * $salario;
    $salario = $reajuste + $salario;
    $reajuste = number_format($reajuste, 2, '.', '');
    $salario = number_format($salario, 2, '.', '');

    echo "Novo salario: $salario\n";
    echo "Reajuste ganho: $reajuste\n";
    echo "Em percentual: 15 %\n";
} elseif ($salario > 400.00 && $salario <= 800.00) {
    $reajuste = (12 / 100) * $salario;
    $salario = $reajuste + $salario;
    $reajuste = number_format($reajuste, 2, '.', '');
    $salario = number_format($salario, 2, '.', '');

    echo "Novo salario: $salario\n";
    echo "Reajuste ganho: $reajuste\n";
    echo "Em percentual: 12 %\n";
} elseif (($salario > 800.00 && $salario <= 1200.00)) {
    $reajuste = (10 / 100) * $salario;
    $salario = $reajuste + $salario;
    $reajuste = number_format($reajuste, 2, '.', '');
    $salario = number_format($salario, 2, '.', '');

    echo "Novo salario: $salario\n";
    echo "Reajuste ganho: $reajuste\n";
    echo "Em percentual: 10 %\n";
} elseif (($salario > 1200.00 && $salario <= 2000.00)) {
    $reajuste = (7 / 100) * $salario;
    $salario = $reajuste + $salario;
    $reajuste = number_format($reajuste, 2, '.', '');
    $salario = number_format($salario, 2, '.', '');

    echo "Novo salario: $salario\n";
    echo "Reajuste ganho: $reajuste\n";
    echo "Em percentual: 7 %\n";
} else {
    $reajuste = (4 / 100) * $salario;
    $salario = $reajuste + $salario;
    $reajuste = number_format($reajuste, 2, '.', '');
    $salario = number_format($salario, 2, '.', '');

    echo "Novo salario: $salario\n";
    echo "Reajuste ganho: $reajuste\n";
    echo "Em percentual: 4 %\n";
}
