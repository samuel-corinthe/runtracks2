<?php

function leetSpeak($str)
{
    $result = "";

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        switch (strtolower($char)) {
            case 'a':
                $result .= '4';
                break;
            case 'b':
                $result .= '8';
                break;
            case 'e':
                $result .= '3';
                break;
            case 'g':
                $result .= '6';
                break;
            case 'l':
                $result .= '1';
                break;
            case 's':
                $result .= '5';
                break;
            case 't':
                $result .= '7';
                break;
            default:
                $result .= $char;
        }
    }

    return $result;
}

echo leetSpeak("Bien bien... je m'appelle Samuel le tyran");
