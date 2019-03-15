<?php

    print "Qual a distância da viagem? [EM KM] ";
    $distancia = fgets (STDIN);
    print "\n";

    print "Qual a velocidade média esperada pra essa viagem? [KM/h]";
    $velocidade = (int) fgets (STDIN);
    print "\n";
    
    $tempo_viagem = round($distancia / $velocidade);

    print "O tempo da viagem nessas condições, será mais ou menos $tempo_viagem horas";