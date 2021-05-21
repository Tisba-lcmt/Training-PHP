<?php

    $min = 0;

    $max = 1000;
    
    $rand = rand($min, $max);

    function isMysteryNumber($rand) 
    {
        for($i = 1 ; $i <= $rand ; $i ++) 
        {

             if ($i < $rand) {
                 echo "Le nombre que vous proposez est trop petit.";
                 echo "<br>";
                 echo "=> " . "Plus grand.";
                 echo "<br>";
                 echo  "=> " . "Relance le jeu.";
                 return false;
             } 
        }
        echo "Bravo, tu as trouvé le bon nombre !!!!!!";
    }

    echo isMysteryNumber($rand);

?>