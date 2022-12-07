<?php 

$num_1 = (float)readline();
$num_2 = (float)readline();
$num_3 = (float)readline();
$num_4 = (float)readline();
$num_5 = (float)readline();

$pares = 0;
$impars = 0;
$positivos = 0;
$negativos = 0;


if ($num_1 % 2 == 0) {
    $pares = $pares + 1;
} else { 
    $impars = $impars + 1;
}
if ($num_1 > 0){
    $positivos = $positivos + 1;
} else if ($num_1 < 0) {
    $negativos = $negativos + 1;
}

if ($num_2 % 2 == 0) {
    $pares = $pares + 1;
} else { 
    $impars = $impars + 1;
}
if ($num_2 > 0){
    $positivos = $positivos + 1;
} else if ($num_2 < 0) {
    $negativos = $negativos + 1;
}

if ($num_3 % 2 == 0) {
    $pares = $pares + 1;
} else { 
    $impars = $impars + 1;
}
if ($num_3 > 0){
    $positivos = $positivos + 1;
} else if ($num_3 < 0) {
    $negativos = $negativos + 1;
}

if ($num_4 % 2 == 0) {
    $pares = $pares + 1;
} else { 
    $impars = $impars + 1;
}
if ($num_4 > 0){
    $positivos = $positivos + 1;
} else if ($num_4 < 0) {
    $negativos = $negativos + 1;
}

if ($num_5 % 2 == 0) {
    $pares = $pares + 1;
} else { 
    $impars = $impars + 1;
}
if ($num_5 > 0){
    $positivos = $positivos + 1;
} else if ($num_5 < 0) {
    $negativos = $negativos + 1;
}


echo "$pares valor(es) par(es)\n";
echo "$impars valor(es) impar(es)\n";
echo "$positivos valor(es) positivo(s)\n";
echo "$negativos valor(es) negativo(s)\n";
