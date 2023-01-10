<?php
$i = 1;
while ($i <= 9) {
    $j = 7;
    echo "I=$i " . "J=$j\n";
    $j = $j - 1;
    echo "I=$i " . "J=$j\n";
    $j = $j - 1;
    echo "I=$i " . "J=$j\n";
    $i = $i + 2;
}
