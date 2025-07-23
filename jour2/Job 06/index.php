<?php

$largeur=15;
$hauteur=5;


// J'ai réussi à faire l'espace merci !

    echo str_repeat("*",$largeur) . "<br>";

for ($i=0; $i<$hauteur-2; $i++){
    echo "*" . str_repeat("&nbsp;&nbsp",$largeur-2) . "*<br>";
}

    echo str_repeat("*",$largeur) . "<br>";