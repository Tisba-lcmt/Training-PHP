<?php

    $a = 12;
    $b = "bite";

    $c = $a;
    $a = $b;
    $b = $c;





    echo $a; // affiche "bite"
    echo $b; // affiche 12

?>