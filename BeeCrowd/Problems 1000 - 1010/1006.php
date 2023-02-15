<?php

$A = (double)readline();
$B = (double)readline();
$C = (double)readline();

$peso_a = 2;
$peso_b = 3;
$peso_c = 5;

$soma_notas = ($A * $peso_a) + ($B * $peso_b) + ($C * $peso_c); 
$soma_pesos = ($peso_a + $peso_b + $peso_c);

$MEDIA = ($soma_notas / $soma_pesos);
$MEDIA = number_format($MEDIA, 1, '.','');

echo 'MEDIA = ' . $MEDIA . "\n";