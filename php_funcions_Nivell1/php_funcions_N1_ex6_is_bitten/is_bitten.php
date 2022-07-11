<?php

function isBitten() {

$numero = rand(0, 100);

    if ($numero <= 50) { 
        echo "Charlie em va mossegar el dit!"; 
    }
    else {
        echo "Charlie no em va mossegar el dit!";
    }
}
echo isBitten();