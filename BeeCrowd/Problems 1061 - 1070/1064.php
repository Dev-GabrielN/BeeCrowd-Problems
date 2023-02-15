<?php

$num_1 = (float)readline();
$num_2 = (float)readline();
$num_3 = (float)readline();
$num_4 = (float)readline();
$num_5 = (float)readline();
$num_6 = (float)readline();

$valor = 0;
$media = 0;

if ($num_1 > 0) {
    $valor = $valor + 1;
    $media = $media + $num_1;
}
if ($num_2 > 0) {
    $valor = $valor + 1;
    $media = $media + $num_2;
}
if ($num_3 > 0) {
    $valor = $valor + 1;
    $media = $media + $num_3;
}
if ($num_4 > 0) {
    $valor = $valor + 1;
    $media = $media + $num_4;
}
if ($num_5 > 0) {
    $valor = $valor + 1;
    $media = $media + $num_5;
}
if ($num_6 > 0) {
    $valor = $valor + 1;
    $media = $media + $num_6;
}

$media = $media / $valor;

$media = number_format($media, '1', '.', '');

echo "$valor valores positivos\n";
echo "$media\n";
