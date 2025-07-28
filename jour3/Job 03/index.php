<?php 
$str = "I'm sorry Dave I'm afraid I can't do that";
$strArray = str_split($str);
foreach ($strArray as $char) {
    if (in_array(strtolower($char), ['a', 'e', 'i', 'o', 'u', 'y'])) {
        echo $char;
    }
}

