<?php
$entrada = readline();
$entrada = explode(" ", $entrada);
rsort($entrada);

$A = $entrada[0];
$B = $entrada[1];
$C = $entrada[2];

if ($A >= ($B + $C)) {
    echo "NAO FORMA TRIANGULO\n";
} else if (($A * $A) > ($B * $B) + ($C * $C)) {
    echo "TRIANGULO OBTUSANGULO\n";
}
if (($A * $A) == ($B * $B) + ($C * $C)) {
    echo "TRIANGULO RETANGULO\n";
}
if (($A * $A) < (($B * $B) + ($C * $C))) {
    echo "TRIANGULO ACUTANGULO\n";
}
if ($A == $B && $B == $C) {
    echo "TRIANGULO EQUILATERO\n";
}
if ($A == $B && $C != $A) {
    echo "TRIANGULO ISOSCELES\n";
} else if ($B == $C && $A != $B) {
    echo "TRIANGULO ISOSCELES\n";
}
