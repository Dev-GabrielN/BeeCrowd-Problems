<?php

$stop = (int)readline();

for ($i = 0; $i <= $stop; $i++) {
    if (!($i % 2 == 0)) {
        echo "$i\n";
    }
}
