

<?php


function leetSpeak($str)
{

    //a et A
    $aMaj = ord('A') - 61;
    $aMin = ord('a') - 93;
    //b et B
    $bMaj = ord('B') - 58;
    $bMin = ord('b') - 90;
    //e et E
    $eMaj = ord('E') - 66;
    $eMin = ord('e') - 98;
    //g et G
    $gMaj = ord('G') - 65;
    $gMin = ord('g') - 97;
    //l et L
    $lMaj = ord('L') - 75;
    $lMin = ord('l') - 107;
    //s et S
    $sMaj = ord('S') - 78;
    $sMin = ord('s') - 110;
    //t et T
    $tMaj = ord('T') - 77;
    $tMin = ord('t') - 109;
    for ($i = 0; $i < strlen($str); $i++) {
        switch ($str[$i]) {
            case chr(65):
                $i== $aMaj;
                break;
            case chr(97):
                $i== $aMin;
                break;
            case chr(66):
                 $i== $bMaj;
                 break;
            case chr(98):
                $i== $bMin;
                break;
            case chr(69):
                $i== $eMaj;
                break;

            case chr(101):
                $i= $eMin;
                break;

            case chr(71):
                $i== $gMaj;
                break;

            case chr(103):
                $i== $gMin;
                break;

            case chr(76):
                $i== $lMaj;
                break;

            case chr(108):
                $i== $lMin;
                break;

            case chr(83):
                $i== $sMaj;
                break;

            case chr(115):
                $i== $sMin;
                break;

            case chr(84):
                $i== $tMaj;
                break;

            case chr(116):
                $i== $tMin;
                break;

                return $str . "<br>";
        }
    }
}

echo leetSpeak("Bien bien... je m'appelle Samuel le tyran");


