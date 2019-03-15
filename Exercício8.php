<?php

    print "Quantos cigarros você fuma por dia: \n";
    $cigarros_por_dia = fgets(STDIN);

    print "A quantos anos você fuma: \n";
    $anos_fumando = fgets(STDIN);

    $cigarros_fumados = $cigarros_por_dia*$anos_fumando*365;
    $minutos_perdidos = $cigarros_fumados*10;
    $horas_perdidas   = $minutos_perdidos/60;
    $dias_perdidos    = round ($horas_perdidas/24);

    print "Você perdeu $dias_perdidos dias de vida... :'( ";