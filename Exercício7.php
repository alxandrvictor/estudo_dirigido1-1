<?php

    print "Quantos Km você percorreu com o carro?\n ";
    $km_carro = (int)fgets(STDIN);

    print "Quantos dias ficou com o carro?\n ";
    $dias_carro = (int)fgets(STDIN);
    $valor = ($dias_carro*60)+($km_carro*0.15);

    print "Sabendo que é cobrado R$60,00 por dia + R$0,15 por km rodado. O valor total a pagar será de R$$valor";