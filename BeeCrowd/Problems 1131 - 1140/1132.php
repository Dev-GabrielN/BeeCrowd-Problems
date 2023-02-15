<?php

$x = (int)readline();
$y = (int)readline();
$soma = 0;

while ($x <= $y) {
    if ($x % 13 != 0) {
        $soma = $soma + $x;
    }
    if ($x === $y) {
        break;
    }
    $x = $x + 1;
}
while ($y <= $x) {
    if ($y % 13 != 0) {
        $soma = $soma + $y;
    }
    if ($x === $y) {
        break;
    }
    $y = $y + 1;
}

echo "$soma\n";
