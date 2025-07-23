<?php 
$str = "Les choses que l'on possède finissent par nous posséder";
$strArray = mb_str_split($str);
array_splice($strArray, 1, 2);
foreach ($strArray as $char) {
    
    echo $char;
}