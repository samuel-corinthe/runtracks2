<?php 

for ($num=0; $num<=100; $num++)
{
    if ($num<=20) {
        echo "<i>$num</i><br>";
    }

             elseif ($num==42) {
        echo "La Plateforme_<br>";
    }

            elseif ( $num<=50 && $num>=25 ) {
        echo "<u>$num</u><br>";
    }

    else {
        echo $num, "<br>";
    }

    
}