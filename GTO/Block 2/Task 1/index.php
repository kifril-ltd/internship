<?php

function getDigitsCount(int $num) : int {
    $count = 0;
    while ($num != 0) {
        $num = intdiv($num, 10);
        $count++;
    }

    return $count;
}

$k = (int)readline();

for ($i = 0; $i <= $k; $i++) {
    
    $p = 10 ** getDigitsCount($i);
    
    if (($i * $i) % $p == $i) {
        echo "$i\n";
    }
}
