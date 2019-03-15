<?php

print "Quantos anos você tem: ";
$idade = (int)fgets (STDIN);
$dias_de_vida  = round ($idade*365);
$horas_de_vida = round($dias_de_vida/24);
$minutos_de_vida = round($horas_de_vida/60);
$segundos_de_vida = round($minutos_de_vida/60);
$total_segundos = ((($idade*24*60*60)+$horas_de_vida*60*60)+$minutos_de_vida*60)+$segundos_de_vida;

print "De acordo com sua idade, você já viveu $dias_de_vida dias, $horas_de_vida horas, $minutos_de_vida minutos e $segundos_de_vida segundos, totalizando $total_segundos segundos";