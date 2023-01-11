<?php

/*
Leia uma quantidade indeterminada de duplas de valores inteiros X e Y. 
Escreva para cada X e Y uma mensagem que indique se estes valores foram 
digitados em ordem crescente ou decrescente.
*/

$i = 1;

while ($i > 0) {
    $entrada = readline();
    $entrada = explode(' ', $entrada);
    $x = intval($entrada[0]);
    $y = intval($entrada[1]);

    if ($x == $y) {
        break;
    }

    if ($x > $y) {
        echo "Decrescente\n";
    } else {
        echo "Crescente\n";
    }
}
