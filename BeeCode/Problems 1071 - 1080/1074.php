<?php 

$n = (int)readline();

for ($i = 1; $i <= $n; $i++){
    $x = (int)readline();

    if ($x > 0 && $x % 2 == 0){
        echo "EVEN POSITIVE\n";
    } else if ($x < 0 && $x % 2 == 0){
        echo "EVEN NEGATIVE\n";
    } else if ($x > 0 && $x % 2 != 0){
        echo "ODD POSITIVE\n";
    } else if ($x < 0 && $x % 2 != 0){
        echo "ODD NEGATIVE\n";
    } else if ($x == 0){
        echo "NULL\n";
    }
}