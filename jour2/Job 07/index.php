<?php 

$hauteur = 5;

for ($i = 1; $i <= $hauteur; $i++) {
    
    echo str_repeat("&nbsp;", ($hauteur - $i) * 2);
   
    echo str_repeat("*", ($i * 2) - 1);
    echo "<br>";
}
