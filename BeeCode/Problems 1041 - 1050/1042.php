<?php 

$entrada = readline();
$entrada = explode(" ", $entrada);

$num_1_normal = intval($entrada[0]);
$num_2_normal = intval($entrada[1]);
$num_3_normal = intval($entrada[2]);

sort($entrada);

$num_1_sort = intval($entrada[0]);
$num_2_sort = intval($entrada[1]);
$num_3_sort = intval($entrada[2]);


echo "$num_1_sort\n";
echo "$num_2_sort\n";
echo "$num_3_sort\n";

echo "\n";

echo "$num_1_normal\n";
echo "$num_2_normal\n";
echo "$num_3_normal\n";
