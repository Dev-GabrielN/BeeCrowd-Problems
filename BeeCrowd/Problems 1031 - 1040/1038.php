<?php 

$entrada = readline();
$entrada = explode(" ", $entrada);

$codigo = intval($entrada[0]);
$qnt = intval($entrada[1]);


$cod_1 = 4.00;
$cod_2 = 4.50;
$cod_3 = 5.00;
$cod_4 = 2.00;
$cod_5 = 1.50;


if ($codigo == 1) {
    $saida = $cod_1 * $qnt;

}elseif ($codigo == 2) {
    $saida = $cod_2 * $qnt;

}elseif ($codigo == 3) {
    $saida = $cod_3 * $qnt;

}elseif ($codigo == 4) {
    $saida = $cod_4 * $qnt;

}elseif ($codigo == 5) {
    $saida = $cod_5 * $qnt;

}


$valor = number_format($saida, 2, ".","");
echo "Total: R$ $valor\n";
