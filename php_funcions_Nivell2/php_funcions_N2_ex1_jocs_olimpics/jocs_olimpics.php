<?php

function olimpiades (){
$anyInici = 1957;
$anyFinal = 2016;

echo "Anys olímpics des de l'any 1960 fins a l'any 2016: " .PHP_EOL;

   while($anyInici <= $anyFinal){
      $anyInici = $anyInici + 3;
      echo $anyInici ."\n";
      $anyInici++;
   }
}  

echo olimpiades ();