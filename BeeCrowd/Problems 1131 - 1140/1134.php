<?php

$alcool = 0;
$gasolina = 0;
$diesel = 0;

while (true) {
    $number = (int)readline();
    if ($number < 1 || $number > 4) {
        $number = (int)readline();
    }
    if ($number == 1) {
        $alcool = $alcool + 1;
    }
    if ($number == 2) {
        $gasolina = $gasolina + 1;
    }
    if ($number == 3) {
        $diesel = $diesel + 1;
    }

    if ($number == 4) {
        break;
    }
}

echo "MUITO OBRIGADO\n";

echo "Alcool: $alcool\n";
echo "Gasolina: $gasolina\n";
echo "Diesel: $diesel\n";
