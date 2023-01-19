<?php

$n = (int)readline();
$x = 1;
$y = 1;
$z = 1;

for ($i = 0; $i < $n; $i++) {
    $y = $x ** 2;
    $z = $x ** 3;
    echo "$x $y $z\n";

    $y = (($x ** 2) + 1);
    $z = (($x ** 3) + 1);
    echo "$x $y $z\n";
    $x = $x + 1;
}
