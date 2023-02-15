<?php
$entrada = (float)readline();
for ($i = 1; $i <= 10; $i++) {
    $result = $entrada * $i;
    echo "$entrada x $i = $result\n";
    sleep(1);
}