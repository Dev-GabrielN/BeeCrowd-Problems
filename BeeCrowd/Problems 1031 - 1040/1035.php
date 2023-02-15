<?php
// Leia 4 valores inteiros A, B, C e D. A seguir, 
// se B for maior do que C e se D for maior do que A, 
// e a soma de C com D for maior que a soma de A e B e se C e D, 
// ambos, forem positivos e se a variável A for par escrever 
// a mensagem "Valores aceitos", senão escrever "Valores nao aceitos".

$entrada = readline();
$entrada = explode(" ", $entrada);

$A = intval($entrada[0]);
$B = intval($entrada[1]);
$C = intval($entrada[2]);
$D = intval($entrada[3]);

$AB = $A + $B;
$CD = $C + $D;

if  ($B > $C && 
    $D > $A &&
    $CD > $AB &&
    $C >= 0 && 
    $D >= 0 &&
    $A % 2 === 0) {
    echo "Valores aceitos\n";
} else {
    echo "Valores nao aceitos\n";
}