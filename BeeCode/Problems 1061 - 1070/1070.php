<?php

$entrada = (int)readline();
$limit = 0;

for ($i = $entrada;; $i++) {
    if (!($i % 2 == 0)) {
        echo "$i\n";
        $limit = $limit + 1;
    }

    if ($limit == 6){
        break;
    }
}
