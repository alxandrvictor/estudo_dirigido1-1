<?php

    print "Qual o valor do seu salário: ";
    $salario = (int)fgets(STDIN);
    print "\n";

    print "Qual a porcentagem de aumento: ";
    $porcentagem = (int)fgets(STDIN);
    print "\n";

    $aumento = $salario * ($porcentagem/100);
    $salario_final = $salario + $aumento;

    print "Você terá um aumento de $aumento reais, tendo seu salário atualizado no valor de $salario_final reais";