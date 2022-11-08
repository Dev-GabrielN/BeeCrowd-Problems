<?php 

$n = 3.14159;
$raio = (double)readline();
$area = $n * $raio**2;
$area_result = number_format($area, 4, '.','');

echo "A=$area_result\n";