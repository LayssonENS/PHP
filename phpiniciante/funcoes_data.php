<?php

//date Y - Ano, m - mes, d - Dia 
// h:i - exibe minutos e horas
date_default_timezone_set('America/Sao_Paulo');
echo date("d/m/Y H:i").  '<br>';

//strtotime calculo em segundos entre datas
$data_inicial = '2019-02-28';
$data_final = '2019-03-21';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_times = $time_final - $time_inicial;

$dia_segundos = 24*60*60;
$diferenca_dias = $diferenca_times / $dia_segundos;
echo $diferenca_dias;


?>