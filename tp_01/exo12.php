<?php

$nb_secondes = 347872;
$heures = floor($nb_secondes / 3600);
$minutes = floor(($nb_secondes / 60) % 60);
$secondes = $nb_secondes % 60;

echo $heures . " h " . $minutes . " m " . $secondes . " s ";

echo "<br>";
echo "<br>";

$heures = floor($nb_secondes / 3600);
$secondes_restantes = $nb_secondes % 3600;
$minutes = floor($secondes_restantes / 60);
$secondes = $secondes_restantes % 60;

echo $heures . " h " . $minutes . " m " . $secondes . " s ";

?>