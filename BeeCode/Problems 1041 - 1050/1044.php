<?php

$entrada = readline();
$entrada = explode(" ", $entrada);

$A = intval($entrada[0]);
$B = intval($entrada[1]);

if ($B % $A == 0) {
    echo "Sao Multiplos\n";
} else if ($A % $B == 0) {
    echo "Sao Multiplos\n";
} else {
    echo "Nao sao Multiplos\n";
}
