<?php 

$X = (int)readline();
$Y = (float)readline();

$consumo_medio = ($X / $Y);
$consumo_medio = number_format($consumo_medio, 3, '.', '');

echo "$consumo_medio km/l\n";
