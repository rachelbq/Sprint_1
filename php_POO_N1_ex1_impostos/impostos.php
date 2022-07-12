<?php

class Employee{
    public $nom;
    public $sou;

    public function initialize($nom,$sou){
    }

    public function print($nom,$sou){
        if($sou > 6000){
            return ($nom .", has de pagar impostos");
        } else {
            return ($nom .", no has de pagar impostos");
        }
    }
}

//provant mètode print:
$impostos = new Employee();
var_dump($impostos->print("Joan Margarit", 20000));

?>