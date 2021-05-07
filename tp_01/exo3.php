<?php

    $number = 30;

    $a = deg2rad($number);

    $positionX = cos($a);

    $positionY = sin($a);

    $pointP = "La position en x et y du point P est : " . "(" . $positionX .  " , " . $positionY . ")";

    echo $pointP;

?>