<?php 

$entrada = readline();
$entrada = explode(" ", $entrada);

$inicio = intval($entrada[0]);
$final = intval($entrada[1]);


if ($inicio < $final) {
    $duracao = ($final - $inicio);
    echo "O JOGO DUROU $duracao HORA(S)\n";
} else if ($inicio == $final) {
    echo "O JOGO DUROU 24 HORA(S)\n";
} else {
    $duracao = (24 - ($inicio - $final));
    echo "O JOGO DUROU $duracao HORA(S)\n";
}
