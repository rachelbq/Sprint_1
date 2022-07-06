<?php
    $primerArray=array(2,4,6,7,8);
    $segonArray=array(1,3,5);
        $segonArray[]=9;
    print_r($primerArray);
    echo "<br>";
    print_r($segonArray);
    echo "<br>";
    $arrayResultant=array();
        $arrayResultant=array_merge($primerArray, $segonArray);
        var_dump($arrayResultant);
        echo "<br>";
        echo "<br>";
        echo "L'array resultant té " .count($arrayResultant) ." elements: "; 
        echo "<br>";
        foreach($arrayResultant as $arrayResultant){
            echo $arrayResultant ."<br>";
        }