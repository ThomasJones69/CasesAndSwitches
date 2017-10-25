<?php

   optellen(optellen(14,8), optellen(1,1));
   optellen(22,2);
   24;

   $var1 = optellen(4,5); //Dus $var1 wordt 9
   $var1 = 9; //Dus de uitkomst is hetzelfde als de vorige regel
   $var2 = optellen(2,3); // Dus $var2 wordt dan 5
   $var3 = optellen(14,7); // Dus $var3 wordt 21
   echo ($var1 * $var2) / $var3;
   echo "<br>";
  
   echo (optellen(4,5) * optellen(2,3))/optellen(14,7);
   echo "<br>";
   echo (9 * 5) / 21; //Zie de code 2 regels hierboven
   
   function optellen($getal1, $getal2){
   //    echo "De uitkomst is: ".($getal1+$getal2);
       return ($getal1+$getal2);
   }
   
?>
