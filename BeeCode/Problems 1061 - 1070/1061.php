<?php

$dia = readline();
$horas = readline();
$dia_final = readline();
$horas_final = readline();

$dia = explode(' ', $dia);
$dia = $dia[1];
$dia_final = explode(' ', $dia_final);
$dia_final = $dia_final[1];

$horas = explode(':', $horas);
$horas_final = explode(':', $horas_final);

$hora_inicio = intval($horas[0]);
$hora_final = intval($horas_final[0]);

$minuto_inicio = intval($horas[1]);
$minuto_final = intval($horas_final[1]);

$segundo_inicial = intval($horas[2]);
$segundo_final = intval($horas_final[2]);

$dia_total = $dia_final - $dia;
$horas_total = $hora_final - $hora_inicio;
$minuto_total = $minuto_final - $minuto_inicio;
$segundo_total = $segundo_final - $segundo_inicial;

if ($segundo_total < 0 && $minuto_total == 0) {
    $minuto_total = 60 + ($segundo_total);
    $segundo_total = 60 + ($segundo_total);
    $horas_total = $horas_total - 1;
} else {
    $minuto_total = 60 - ($minuto_total);
}

if ($minuto_final < 0 && $horas_total == 0) {
    $horas_total = 24 - 1;
    $minuto_final = 60 + ($minuto_final);
}

if ($horas_total < 0) {
    $dia_total = $dia_total - 1;
    $horas_total = 24 + ($horas_total);
}


echo "$dia_total dia(s)\n";
echo "$horas_total hora(s)\n";
echo "$minuto_total minuto(s)\n";
echo "$segundo_total segundo(s)\n";
