<?php
$j = 60;
$i = 1;
while ($j >= 0) {
    echo "I=$i " . "J=$j\n";
    if ($j == 0) {
        break;
    }
    $i = $i + 3;
    $j = $j - 5;
}
