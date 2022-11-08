<?php

$tempo = (int)readline(); 
$km_media = (int)readline(); 
$km_litro = 12;

$distancia = ($tempo * $km_media);
$litros_total = ($distancia / 12);

$litros_total = number_format($litros_total, 3, '.','');

echo "$litros_total\n";

