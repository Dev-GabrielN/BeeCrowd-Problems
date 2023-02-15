<?php

$entrada = readline();
$entrada = explode(" ", $entrada);

$A = floatval($entrada[0]);
$B = floatval($entrada[1]);
$C = floatval($entrada[2]);

if (
    $B + $C > $A &&
    $A + $C > $B &&
    $A + $B > $C
) {
    $perimetro = ($A + $B + $C);
    $perimetro = number_format($perimetro, 1, ".","");
    echo "Perimetro = $perimetro\n";
} else {
    $base = ($A + $B);
    $area = (($base * $C) / 2);
    $area = number_format($area, 1, ".","");
    echo "Area = $area\n";
}
