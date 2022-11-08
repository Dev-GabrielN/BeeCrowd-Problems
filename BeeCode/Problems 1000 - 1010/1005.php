<?php 

$nota_a = (double)readline();
$nota_b = (double)readline();

$peso_a = 3.5;
$peso_b = 7.5;

$media = (($nota_a * $peso_a) + ($nota_b * $peso_b))  / ($peso_a + $peso_b);

$media = number_format($media, 5, '.', '');

echo "MEDIA = $media \n";