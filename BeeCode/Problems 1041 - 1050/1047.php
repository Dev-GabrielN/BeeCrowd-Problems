<?php

$entrada = readline();
$entrada = explode(" ", $entrada);

$inicio = intval($entrada[0]);
$inicio_minutos = intval($entrada[1]);
$final = intval($entrada[2]);
$final_minutos = intval($entrada[3]);

$total = ($final - $inicio);
$total_minutos = ($final_minutos - $inicio_minutos);



if ($total <= 0) {
    $total = 24 + ($total);
}

if ($total_minutos < 0) {
    $total_minutos = 60 + ($total_minutos);
    $total--;
}

if ($total == 24 && $total_minutos > 0) {
    $total = 0;
}

if ($inicio == $final && $inicio_minutos == $final_minutos) {
    echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
} else {
    echo "O JOGO DUROU $total HORA(S) E $total_minutos MINUTO(S)\n";
}
