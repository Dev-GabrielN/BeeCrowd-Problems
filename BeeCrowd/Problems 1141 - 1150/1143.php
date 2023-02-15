<?php

$n = (int)readline();
$x = 1;
$y = 1;
$z = 1;

for ($i = 0; $i < $n; $i++) {
    echo "$x $y $z\n";
    $x = $x + 1;
    $y = $x** 2;
    $z = $x** 3;
}
