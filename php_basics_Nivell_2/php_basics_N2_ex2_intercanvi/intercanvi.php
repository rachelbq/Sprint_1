<?php
    echo "Introduce una cadena de caracteres: ";
    fscanf(STDIN, "%s", $cadena);
    
    $longitudCadena = strlen($cadena);
    
    If ($longitudCadena >= 2) {
        $primerCaracter = substr($cadena,0,1);
        $ultimoCaracter = substr($cadena,-1);
        $cadenaIntermedia = substr($cadena,1,-1);
        $cadenaCambiada = $ultimoCaracter .$cadenaIntermedia .$primerCaracter;
        echo 'La cadena que has introducido es: ' .$cadena .PHP_EOL;
        echo 'Y ahora imprimimos tu cadena intercambiando el primer y el último carácter: ' .$cadenaCambiada .PHP_EOL;
    } else {
        echo 'Has introducido un único carácter: ' .$cadena .PHP_EOL;
    }