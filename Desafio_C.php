<?php

    $rendimento_lata    = 18*6;
    $rendimento_galao   = 3.6*6;
   
    print "Digite a área a ser pintada: \n";
    $area_para_pintar   = (int)fgets(STDIN);
    $cobertura_da_tinta = $area_para_pintar/6;    
    $qtd_latas          = (int) ($area_para_pintar / $rendimento_lata);
    $faltou             = $area_para_pintar % $rendimento_lata;
    $galoes_qtd         = ceil ($faltou / $rendimento_galao);
    $custo              = ceil ($qtd_latas*80)+($galoes_qtd*25);
    
    print "Quantidade de latas: $qtd_latas, quantidade de galões: $galoes_qtd\n Totalizando $custo reais\n";