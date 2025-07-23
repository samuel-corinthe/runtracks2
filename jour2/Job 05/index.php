<?php 


for ($num = 0; $num <= 1000; $num++) {
    $otherRule = true;
    if ($num < 2) {
        $otherRule = false;
    } else {
        for ($other = 2; $other <= sqrt($num); $other++) {
            if ($num % $other == 0) {
                $otherRule = false;
                break;
            }
        }
    }
    if ($otherRule) {
        echo $num . "<br>";
    }
}