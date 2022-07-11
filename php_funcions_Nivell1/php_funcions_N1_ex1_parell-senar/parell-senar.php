<?php

function parell_senar ($edat){
    If ($edat % 2 == 0) {
        $resultat = "parell";
    } else {
        $resultat = "senar";
    }
    return $resultat;
    }

echo "Introdueix la teva edat: ";
fscanf(STDIN, "%d", $edat);

echo "Tens " . $edat . " anys, la teva edat és un nombre " . parell_senar ($edat) . "." .PHP_EOL;