<?php

$entrada = readline();
$entrada = explode(" ", $entrada);

$A = doubleval($entrada[0]);
$B = doubleval($entrada[1]);
$C = doubleval($entrada[2]);

$delta = (($B * $B) - (4 * $A * $C));
$delta = sqrt($delta);

if ($delta > 0 && $A > 0) {

    $bhaskara_1 = (-$B + $delta);
    $bhaskara_1 = ($bhaskara_1 / (2 * $A));

    $bhaskara_2 = (-$B - $delta);
    $bhaskara_2 = ($bhaskara_2 / (2 * $A));

    $bhaskara_1 = number_format($bhaskara_1, 5, ".", "");
    $bhaskara_2 = number_format($bhaskara_2, 5, ".", "");
    echo "R1 = $bhaskara_1\n";
    echo "R2 = $bhaskara_2\n";
} else {
    echo "Impossivel calcular\n";
}
