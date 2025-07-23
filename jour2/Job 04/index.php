<?php 

for ($num=1; $num<=100; $num++) {
    if ($num % 3 == 0 && $num % 5 == 0){
        echo "FizzBuzz<br>";
    }
    elseif ($num % 5 == 0){
        echo "Buzz<br>";
    }
    elseif ($num % 3 == 0){
        echo "Fizz<br>";
    }

    else {
        echo $num , "<br>";
    }
}