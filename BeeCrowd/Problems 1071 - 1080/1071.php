<?php

$x = (int)readline();
$y = (int)readline();

$result = 0;

if ($x == $y) {
    $result = 0;
}

while ($y < $x) {
    $y = $y + 1;
    if ($y == $x) {
        break;
    }

    if ($y % 2 != 0) {
        $result = $result + $y;
    }
}

echo "$result\n";
