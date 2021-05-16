<?php

function isPrime(int $number) : bool {
    if ($number % 2 == 0) {
        return false;
    }
    
    $del = 3;
    $isPrime = true;
    while ($del * $del <= $number) {
        
        if ($number % $del == 0) {
            $isPrime = false;
            break;
        }
        
        $del += 2;
    }
    
    return $isPrime;
}

$number = (int)readline();

if (isPrime($number)) {
    echo "prime";
}
else {
    echo "composite";
}
