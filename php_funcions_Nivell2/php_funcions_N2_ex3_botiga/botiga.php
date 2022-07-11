<?php

function compresXocolata ($unitatsXocolata) {
$preuXocolata = 1;
$subtotalXocolata = $unitatsXocolata * $preuXocolata;
return $subtotalXocolata;
}

function compresXiclets($unitatsXiclets){
$preuXiclets = 0.5;
$subtotalXiclets = $unitatsXiclets * $preuXiclets;
return $subtotalXiclets;
}

function compresCaramels($unitatsCaramels){
$preuCaramels = 1.5;
$subtotalCaramels = $unitatsCaramels * $preuCaramels;
return $subtotalCaramels;
}

echo "Cistella: " .PHP_EOL;
echo "Unitats de xocolata: " .PHP_EOL;
fscanf(STDIN, "%d", $unitatsXocolata);
echo "Unitats de xiclets: " .PHP_EOL;
fscanf(STDIN, "%d", $unitatsXiclets);
echo "Unitats de caramels: " .PHP_EOL;
fscanf(STDIN, "%d", $unitatsCaramels);

$totalCompra = compresXocolata($unitatsXocolata) + compresXiclets($unitatsXiclets) + compresCaramels($unitatsCaramels);

echo "Articles i import de la teva cistella:" .PHP_EOL;
echo "xocolata: " .$unitatsXocolata .", xiclets: " .$unitatsXiclets . ", caramels: " .$unitatsCaramels ." = " .compresXocolata($unitatsXocolata) ."€ + " .compresXiclets($unitatsXiclets) ."€ + " .compresCaramels($unitatsCaramels) ."€ = " .$totalCompra ."€" .PHP_EOL;

?>