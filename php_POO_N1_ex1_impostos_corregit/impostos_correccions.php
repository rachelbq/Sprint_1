<?php

class Employee{
    
    private $nom;
    private $sou;

    function initialize($nom,$sou) {
        $this->nom = $nom;
        $this->sou = $sou;
    }
    
    function print() {

        if($this->sou > 6000) {
            echo $this->nom .", has de pagar impostos.";
        } else {
            echo $this->nom .", no has de pagar impostos.";
        }
    }

}

//provant mètodes
$impostos1 = new Employee();
$impostos1->initialize("Joan Margarit", 20000);
$impostos1->print();

?>