<?php

    print "Digite a área a ser pintada: \n";
    $area_para_pintar   = (int)fgets(STDIN);
    $cobertura_da_tinta = $area_para_pintar/6;
    $rendimento_lata    = 18*6;
    $qtd_latas          = ceil ($area_para_pintar/$rendimento_lata);
    $preco              = $qtd_latas*80;
    print "Quantidade de latas: $qtd_latas, valor: $preco reais\n";