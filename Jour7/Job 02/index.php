<?php 

function bonjour($jour){
    if ($jour== true){
        echo "Bonjour<br>";
    }
    else {
        echo "Bonsoir<br>";
    }
}

bonjour(true);
bonjour(false);