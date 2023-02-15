<?php

$i = 0;
$j_1 = 1;
$j_2 = 2;
$j_3 = 3;
while ($i <= 2) {
    echo "I=$i J=$j_1\n";
    echo "I=$i J=$j_2\n";
    echo "I=$i J=$j_3\n";
    $i = $i + 0.2;
    $j_1 = $j_1 + 0.2;
    $j_2 = $j_2 + 0.2;
    $j_3 = $j_3 + 0.2;

}
