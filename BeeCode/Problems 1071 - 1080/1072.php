<?php

$n = (int)readline();
$in = 0;
$out = 0;

for ($i = 0; $i < $n; $i++) {
    $x = (int)readline();
    if ($x >= 10 && $x <= 20) {
        $in = $in + 1;
    } else {
        $out = $out + 1;
    }
}

echo "$in in\n";
echo "$out out\n";
