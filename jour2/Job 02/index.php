<?php 

for ($num=0; $num<=1337; $num++)
 { 
    if ($num==26 || $num==37 || $num==88 || $num==1111) {
        continue;
    }
    echo  $num . "<br>"  ;
}