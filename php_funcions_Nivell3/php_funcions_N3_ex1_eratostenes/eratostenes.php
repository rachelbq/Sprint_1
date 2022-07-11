<?php

function eratostenes($numero) {

$esPrimo = true;
$i = 2;
    
    if ($numero > 1){
        while ($esPrimo && $i < $numero) {
            if ($numero % $i == 0) {
                $esPrimo = false;
            }
            $i++;
        }
    } else {
        $esPrimo = false;
    }
return $esPrimo;
}
		
echo "Introduzca un número mayor que 1: "; //el número 1 no se considera ni primo ni compuesto
fscanf(STDIN, "%d", $numero);

if (eratostenes($numero)) {
    echo "El número " .$numero ." es Primo.";
} else {
    echo "El número " .$numero ." no es Primo.";
}