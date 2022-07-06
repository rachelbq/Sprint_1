<?php
$varIntX = 5;
$varIntY = 3;
$varDoubM = 8.345;
$varDoubN = 2.245;

echo "X = " .$varIntX;
echo "<br>";
echo "Y = " .$varIntY;
echo "<br>";
echo "==> Operacions amb X/Y: ";
    echo "<br>";
        echo "Suma: X + Y = " .$summa=$varIntX+$varIntY;
        echo "<br>";
        echo "Resta: X - Y = " .$substraccio=$varIntX-$varIntY;
        echo "<br>";
        echo "Producte: X * Y = " .$producte=$varIntX*$varIntY;
        echo "<br>";
        echo "Mòdul: X % Y = " .$modul=$varIntX%$varIntY;
        echo "<br>";
echo "<br>";

echo "M = " .$varDoubM;
echo "<br>";
echo "N = " .$varDoubN;
echo "<br>";
    echo "==> Operacions amb M/N: ";
    echo "<br>";
        echo "Suma: M + N = " .$summa=$varDoubM+$varDoubN;
        echo "<br>";
        echo "Resta: M - N = " .$substraccio=$varDoubM-$varDoubN;
        echo "<br>";
        echo "Producte: M * N = " .$producte=$varDoubM*$varDoubN;
        echo "<br>";
        echo "Mòdul: M % N = " .$modul=(int)$varDoubM%(int)$varDoubN;
        echo "<br>";
echo "<br>";

echo "==> Operacions amb totes les variables (X/Y/M/N): ";
echo "<br>";
echo "El doble de X = " .(2*$varIntX) ." // El doble de Y = " .(2*$varIntY) . " // El doble de M = " .(2*$varDoubM) . " // El doble de N = " .(2*$varDoubN);
echo "<br>";
echo "La suma de X + Y + M + N = " .$summaTotal=$varIntX+$varIntY+$varDoubM+$varDoubN;
echo "<br>";
echo "El producte de X * Y * M * N = " .$producteTotal=$varIntX*$varIntY*$varDoubM*$varDoubN;