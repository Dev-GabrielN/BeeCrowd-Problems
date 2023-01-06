<?php
$x = array(0);
for ($i = 1; $i <= 100; $i++) {
    $x[] = readline();
}

$max = max($x);
$position = array_search($max, $x);

echo  "$max\n";
echo  "$position\n";
