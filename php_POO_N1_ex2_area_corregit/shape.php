<?php

abstract class Shape {

    public $ample;
    public $alt;

    function __construct($ample, $alt) {
        $this->ample = $ample;
        $this->alt = $alt;
    }

    abstract function area();

} 

?>