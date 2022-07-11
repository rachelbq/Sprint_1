<?php

function grau ($percentatgeNota) {

echo "Aquest estudiant ha obtingut un " . $percentatgeNota ."% de nota." .PHP_EOL;

    If ($percentatgeNota >= 60) {
        $grauResultant = "Primera Divisió";
    } elseif ($percentatgeNota >= 45 && $percentatgeNota <= 59) {
        $grauResultant = "Segona Divisió";
    } elseif ($percentatgeNota >= 33 && $percentatgeNota <= 44) {
        $grauResultant = "Tercera Divisió";
    } elseif ($percentatgeNota < 33) {
        $grauResultant = "Reprovat";
    }
    return $grauResultant;
}

echo "Introdueix el % de la nota: ";
fscanf(STDIN, "%d", $percentatgeNota);

echo "Té un grau de " . grau($percentatgeNota) ."." .PHP_EOL;