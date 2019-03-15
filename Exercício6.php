<?php

    print "Qual a temperatura em celsius para ser convertida? ";
    $temp_celsius = (int)fgets(STDIN);
    print "\n";

    $temp_fah = ($temp_celsius*9/5)+32; //(0 °C × 9/5) + 32 = 32 °F

    print "A temperatura convertida para fahrenheite é igual a $temp_fah ºF";