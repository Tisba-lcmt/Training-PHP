<?php

    $limite = 30;

    $somme = 0;

    for ($i = 1; $i <= $limite; $i += 1 ) {

        if ( EstPair($i) ) {

            $somme += $i;
        }
    }

    echo $somme;


    function EstPair($number) {

        if ($number % 2 == 0) {
            return true;
        } else {
            return false;
        }   

    }

?>