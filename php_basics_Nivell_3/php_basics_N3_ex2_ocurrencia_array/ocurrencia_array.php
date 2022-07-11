<?php
$vecesQueSeRepiteElNumero2 = array(1,2,2,3,2,3,4,5,1,2,2,3,4,5,2,2,2,8,2,7,2);
$contador = 0;

for ($i = 0; $i < count($vecesQueSeRepiteElNumero2); $i++) {
    if ($vecesQueSeRepiteElNumero2[$i] == 2) {
        $contador++;
    }
}
echo "El número 2 se repite " .$contador ." veces.";