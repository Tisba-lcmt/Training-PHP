<?php 

    $limite = 5;
    $somme = 1;

    $result = "Le résutat de ";

    for ($i = $limite ; $i >= 1; $i -= 1 ) {

        $somme *= $i;

        $result .= $i;

        if ($i != 1) {
           $result .= "*";
        } else {
            $result .= "";
        }

    }

   $result .= " est égal à ";
   $result .= $somme;

   echo $result;
?>
<?php