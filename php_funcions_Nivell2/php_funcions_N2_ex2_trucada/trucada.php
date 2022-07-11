<?php

function preu_trucada ($tempsTrucada) {

$minutsPrimerTram = 3;
$preuTrucada3Min = 10;
$preuMinutAdicional = 5;

    If ($tempsTrucada <= 3) {
        $preuFinal = $preuTrucada3Min;
    } else {
        $preuFinal = $preuTrucada3Min + (($tempsTrucada - $minutsPrimerTram) * $preuMinutAdicional);
    }
    return $preuFinal;
}

echo "Quants minuts ha durat la trucada?: ";
fscanf(STDIN, "%d", $tempsTrucada);

echo "Aquesta trucada ha durat " . $tempsTrucada . " minuts, i el seu cost total és de " . preu_trucada($tempsTrucada) . $preuFinal ." cèntims." .PHP_EOL;