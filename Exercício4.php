<?php

    print "Qual valor você pagará nesse produto? ";
    $preco = fgets(STDIN);
    print "\n";

    print "Qual a porcentagem de desconto do produto? ";
    $porcentagem = (int) fgets (STDIN);
    print "\n";

    $desconto = $preco * ($porcentagem/100);
    $preco_final = $preco - $desconto;

    print "O valor do desconto será de $desconto reais, e o valor final será de $preco_final reais";