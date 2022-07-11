<?php

function amagatall ($comptar){

$trampes = 1;

echo "Has de comptar fins a " .$comptar . ":" .PHP_EOL;

   while($trampes <= $comptar){
      $trampes = $trampes + 1;
      echo $trampes ."\n";
      $trampes++;
   }
}  

echo amagatall (20) .PHP_EOL;