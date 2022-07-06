<?php
    echo "==> Imprimir la variable per pantalla: " .$varHelloWorld='Hello, World!';
    echo "<br>";
    echo "==> Imprimir-la en majúscul·les: " .$convertirMaj= strtoupper ($varHelloWorld);
    echo "<br>";
    echo "==> Longitud de la variable: " .strlen($varHelloWorld);
    echo "<br>";
    echo "==> String invertit: " .$stringInvertit = strrev($varHelloWorld);
    echo "<br>";
    $novaVar='Aquest és el curs de PHP';
    echo "==> Variables concatenades: " .$novaVar .". " .$varHelloWorld;