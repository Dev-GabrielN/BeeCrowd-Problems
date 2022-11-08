<?php

$p1 = readline();
$p2 = readline();

$p1 = explode(" ", $p1);
$p2 = explode(" ", $p2);

$x1 = $p1[0];
$y1 = $p1[1];

$x2 = $p2[0];
$y2 = $p2[1];

$x1 = floatval($x1);
$y1 = floatval($y1);
$x2 = floatval($x2);
$y2 = floatval($y2);


$distancia = (($x2-$x1)**2 + ($y2 - $y1)**2);
$distancia = sqrt($distancia);
$distancia = number_format($distancia, 4, '.', '');

echo "$distancia\n";