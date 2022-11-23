<?php

$entrada = readline();
$entrada = explode(" ", $entrada);

$inicio = intval($entrada[0]);
$inicio_minutos = intval($entrada[1]);
$final = intval($entrada[2]);
$final_minutos = intval($entrada[3]);

if ($inicio <= $final && $inicio_minutos != $final_minutos) {
    $duracao = ($final - $inicio);
    $duracao_minutos = ($final_minutos - $inicio_minutos);

    if ($inicio == $final && $duracao_minutos < 0) {
        $duracao = 24;
        $duracao = $duracao - 1;
        $duracao_minutos = 60 + ($duracao_minutos);

        echo "O JOGO DUROU $duracao HORA(S) E $duracao_minutos MINUTO(S)\n";
    } else {
        echo "O JOGO DUROU $duracao HORA(S) E $duracao_minutos MINUTO(S)\n";
    }
}

if ($inicio <= $final && $inicio_minutos == $final_minutos){
    $duracao = $final - $inicio;
    $duracao_minutos = 0;
    echo "O JOGO DUROU $duracao HORA(S) E 0 MINUTO(S)\n";
}

if ($inicio == $final && $inicio_minutos == $final_minutos) {
    echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
} 

if ($inicio > $final){
    $duracao = ($inicio - $final);
    $duracao_minutos = ($inicio_minutos - $final_minutos);
    echo "O JOGO DUROU $duracao HORA(S) E $duracao_minutos MINUTO(S)\n";
}
