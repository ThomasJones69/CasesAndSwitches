<?php
    Rekenmachine ("Thomas",2,8);
   
    function Rekenmachine($Voornaam,$getal1,$getal2){
        echo "Beste ".$Voornaam;
        echo "Bij deze schrijf ik u het volgende";
        echo "<br>";
    //  echo "Het resulaat van het optellen van ".$getal1." + ".$getal2." is ".$getal1 + $getal2;
        echo $getal1 + $getal2;
        echo "<br>";
    }

   Rekenmachine("Roan",6,8);
   Rekenmachine("Wes",25,25);

?>