<?php

$str = "Dans l'espace, personne ne vous entend crier";
$count = 0;

$strArray = str_split($str);

foreach ($strArray as $char) {
    if (ctype_alpha($char)) {
        $count++;
    }
}

echo "Number of alphabetic characters: " . $count;
