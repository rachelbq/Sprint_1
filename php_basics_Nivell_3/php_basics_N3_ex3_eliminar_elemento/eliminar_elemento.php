<?php
$x = array(10,20,30,40,50);
echo "Claves y valores iniciales del ";
var_dump($x);
unset($x[1]);
echo "Claves y valores del nuevo ";
var_dump($x);