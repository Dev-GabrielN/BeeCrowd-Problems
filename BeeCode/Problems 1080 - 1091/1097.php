<?php
$j = 7;
$i = 1;
while ($i <= 9) {
    echo "I=$i " . "J=$j\n";
    $j = $j - 1;
    echo "I=$i " . "J=$j\n";
    $j = $j - 1;
    echo "I=$i " . "J=$j\n";
    $i = $i + 2;

    $j = $j + 4;
}
