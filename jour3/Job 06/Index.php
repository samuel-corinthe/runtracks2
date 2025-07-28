<?php 
$str = "Les choses que l'on possède finissent par nous posséder";
$strArray = mb_str_split($str);
$strArrayr = array_reverse($strArray);
foreach ($strArrayr as $char) {
    echo $char;
}




