<?php

    $longueur_ab = 2;
    $longueur_ac = 6;

    $longueur_bc_au_carre = ($longueur_ab * $longueur_ab) + ($longueur_ac * $longueur_ac);

    $longueur_bc = sqrt($longueur_bc_au_carre);

    echo $longueur_bc;

    // j'affiche la longueur bc

?>