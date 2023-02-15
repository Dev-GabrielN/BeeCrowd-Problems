<?php

$n = (int)readline();

for ($i = 1; $i <= $n; $i++) {
    $entrada = readline();
    $entrada = explode(' ', $entrada);

    $num_1 = intval($entrada[0]);
    $num_2 = intval($entrada[1]);

    if ($num_2 == 0) {
        echo "divisao impossivel\n";
    } else {
        $divisao = ($num_1 / $num_2);
        $divisao = number_format($divisao, 1, '.', '');
        echo "$divisao\n";
    }
}
