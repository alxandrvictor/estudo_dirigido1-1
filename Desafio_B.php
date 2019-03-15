<?php

    print "Digite a área a ser pintada: \n";
    $area_para_pintar   = (int)fgets(STDIN);
    $cobertura_da_tinta = $area_para_pintar/6;
    $rendimento_galao   = 3.6*6;
    $qtd_galao          = ceil ($area_para_pintar/$rendimento_galao);
    $preco              = $qtd_galao*80;
    print "Quantidade de galão: $qtd_galao, valor: $preco reais\n";