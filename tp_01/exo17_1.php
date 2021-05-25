<?php 

    $Mon_Tableau = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19);
    $Somme = 0;

    foreach ($Mon_Tableau as $Nombre) {
        $Somme += $Nombre;
    }

    $Moyenne = $Somme / count($Mon_Tableau);

    echo $Moyenne;



?>