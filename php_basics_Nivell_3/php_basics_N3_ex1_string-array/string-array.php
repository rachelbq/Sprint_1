<?php
$cadena = "Hello World";

$searchCadena = " ";
$replaceCadena = "";
$cadenaFinal = str_replace($searchCadena, $replaceCadena, $cadena); 

echo("Cadena inicial: $cadena \n");  
echo("Cadena sin espacios: $cadenaFinal") .PHP_EOL; 

$conversionArray = str_split($cadenaFinal);
var_dump($conversionArray);
print_r($conversionArray);