<?php

$n = intval(fgets(STDIN));

if ($n == 0) {
    $fibonacci = 0;
}

elseif ($n == 1) {
    $fibonacci = 1;
} 

else{
    $cal1 = (1 + sqrt(5)) / 2;
    $cal2 = (1 - sqrt(5)) / 2;

    $fibonacci = (pow($cal1, $n) - pow($cal2, $n)) / sqrt(5);
}

$resul = number_format($fibonacci, 1, '.', '');

echo $resul;
