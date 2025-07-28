<?php 

function calcule($a,$operation,$b){
        switch ($operation)
        {
           case "-": echo $a-$b . "<br>";
        
        break;
        case "+":
            echo $a+$b . "<br>";
        
        break;
        case "/":
            echo round($a/$b,2) . "<br>";
        
        break;
        case "*":
            echo $a*$b . "<br>";
            break;
        case "%":
            echo $a%$b . "<br>";
        
        break;
        

}
}

 calcule(7,'+',8);
  calcule(4,'-',2);
   calcule(9,'/',7);
    calcule(3,'*',4);
     calcule(3,'%',12);