<?php 

$tempo_segundos = (int)readline();

$tempo_horas = intval($tempo_segundos / 3600);
$tempo_minutos = intval(($tempo_segundos % 3600) / 60);
$tempo_segundos_60 = intval(($tempo_segundos % 3600) % 60);

echo "$tempo_horas:$tempo_minutos:$tempo_segundos_60";

