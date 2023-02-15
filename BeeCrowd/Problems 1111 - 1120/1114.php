<?php

$senha = (int)readline();

while ($senha != 2002) {
    echo "Senha Invalida\n";
    $senha = (int)readline();
}
if ($senha === 2002) {
    echo "Acesso Permitido\n";
}
