<?php
function occurence($str, $char)
{
    $compteur = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        
        if ($str[$i] === $char) {
            $compteur++;
        }
    }
    return "la lettre $char apprait " . $compteur . "&nbsp fois dans  $str.";
}
echo occurence("inconstitutionellement", "u");
