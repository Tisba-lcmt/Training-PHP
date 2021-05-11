<?php 

    $limite = 30;
    $somme = 0;

    $result = "Le résutat de ";

    for ($i = 1; $i <= $limite; $i += 1 ) {

        $somme = $somme + $i;
        // strictement équivalent à 
        // $somme += $i;

        $result .= $i;

        if ($i != $limite) {
           $result .= "+";
        }

    }

   $result .= " est égal à ";
   $result .= $somme;

   echo $result;
?>