<?php 

$entrada = readline();
$entrada = explode(" ", $entrada);

$A = intval($entrada[0]);
$B = intval($entrada[1]);
$C = intval($entrada[2]);

$AB = (($A + $B+abs($A - $B)) / 2);
$maiorABC = (($AB + $C+abs($AB - $C)) / 2);

echo "$maiorABC eh o maior";



/* 
Formula não aceita... =C

if ($v1 > $v2 && $v1 > $v3) {
    $maiorAB = $v1;

} elseif ($v2 > $v1 && $v2 > $v3) {
    $maiorAB = $v2;

} else {
    $maiorAB = $v3;
    
} */