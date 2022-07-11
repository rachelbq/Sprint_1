<?php
echo "Introduce 2 números enteros separados por una coma (n1,n2): ";
fscanf(STDIN, "%d,%d", $num1,$num2);

    $suma = $num1 + $num2;
    $operacionRepetidos =  $suma * 2;
 
    If ($num1 == $num2) {
        echo "Los números que ha introducido son iguales, por tanto, el resultado de la operación es el doble de la suma de ambos = " .$operacionRepetidos;
    } else {
        echo "Los números que ha introducido son distintos, por tanto el resultado de la operación es la suma de ambos = " .$suma;
    }