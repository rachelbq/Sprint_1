<?php

function amagatall ($comptar = 10){

$trampes = 1;

echo "Has de comptar fins a " .$comptar . ":" .PHP_EOL;

   while($trampes <= $comptar){
      $trampes = $trampes + 1;
      echo $trampes ."\n";
      $trampes++;
   }
}  

echo amagatall () .PHP_EOL;