<?php

$entrada = readline();
$entrada = explode(" ", $entrada);

$N_1 = floatval($entrada[0]);
$N_2 = floatval($entrada[1]);
$N_3 = floatval($entrada[2]);
$N_4 = floatval($entrada[3]);

$peso_1 = 2;
$peso_2 = 3;
$peso_3 = 4;
$peso_4 = 1;

$total_peso = ($peso_1 + $peso_2 + $peso_3 + $peso_4);

$Nota_Peso_1 = ($N_1 * $peso_1);
$Nota_Peso_2 = ($N_2 * $peso_2);
$Nota_Peso_3 = ($N_3 * $peso_3);
$Nota_Peso_4 = ($N_4 * $peso_4);

$total_nota_peso = ($Nota_Peso_1 + $Nota_Peso_2 + $Nota_Peso_3 + $Nota_Peso_4);
$media_peso = ($total_nota_peso / $total_peso);

$media_peso = round($media_peso, 1, PHP_ROUND_HALF_DOWN);
$media_peso = number_format($media_peso,1,".","");

if ($media_peso >= 7.0) {
    echo "Media: $media_peso\n";
    echo "Aluno aprovado.\n";
    
} elseif ($media_peso < 7.0 && $media_peso >= 5.0) {
    $exame = (float)readline();
    $exame = number_format($exame, 1, ".", "");

    echo "Media: $media_peso\n";
    echo "Aluno em exame.\n";
    echo "Nota do exame: $exame\n";

    $media_final = (($exame + $media_peso) / 2);
    $media_final = number_format($media_final, 1, ".", "");

    if ($media_final >= 5.0) {
        echo "Aluno aprovado.\n";
        echo "Media final: $media_final\n";
    } else {
        echo "Aluno reprovado.\n";
        echo "Media final: $media_final\n";
    }
} else {
    echo "Media: $media_peso\n";
    echo "Aluno reprovado.\n";
}
