<?php 

$pi = (float)3.14159;
$raio = (float)readline();

$volume = ( (4/3) * $pi * ($raio**3) );
$volume = number_format($volume, 3, '.','');

echo 'VOLUME = ' . $volume . "\n";
