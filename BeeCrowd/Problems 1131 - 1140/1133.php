<?php

$x = (int)readline();
$y = (int)readline();

while ($x < $y) {
    $x = $x + 1;
    if ($x % 5 == 2 || $x % 5 == 3) {
        echo "$x\n";
    }
    if ($x === $y) {
        break;
    }
}
while ($y < $x) {
    $y = $y + 1;
    if ($y % 5 == 2 || $y % 5 == 3) {
        echo "$y\n";
    }
    if ($x === $y) {
        break;
    }
}
