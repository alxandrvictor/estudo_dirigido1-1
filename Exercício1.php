<?php

    print "Quantos metros você quer converter?\n";
    $metros = fgets (STDIN);
    $milimetros = $metros/1000;

    print "Convertendo para milimetros fica igual a: $milimetros mm";