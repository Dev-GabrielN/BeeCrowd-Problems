<?php

$vitorias_inter = 0;
$vitorias_gremio = 0;
$empate = 0;
$grenais = 0;

while (true) {
    $entrada = readline();
    $entrada = explode(' ', $entrada);

    $inter = intval($entrada[0]);
    $gremio = intval($entrada[1]);
    $grenais = $grenais + 1;

    if ($inter > $gremio) {
        $vitorias_inter = ($vitorias_inter + 1);
    } else if ($gremio > $inter) {
        $vitorias_gremio = ($vitorias_gremio + 1);
    } else if ($gremio === $inter) {
        $empate = $empate + 1;
    }

    echo "Novo grenal (1-sim 2-nao)\n";
    $x = (int)readline();
    if ($x === 2) {
        break;
    } else {
        continue;
    }
}

echo "$grenais grenais\n";
echo "Inter:$vitorias_inter\n";
echo "Gremio:$vitorias_gremio\n";
echo "Empates:$empate\n";

if ($vitorias_inter > $vitorias_gremio) {
    echo "Inter venceu mais\n";
} else if ($vitorias_gremio > $vitorias_inter) {
    echo "Gremio venceu mais\n";
} else {
    echo "Nao houve vencedor\n";
}
