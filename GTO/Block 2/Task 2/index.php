<?php

$n = (int)readline();

$numbers = array_map('intval', explode(' ', readline()));

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
        if ($numbers[$i] + $numbers[$j] == 0) {
            echo "$i $j";
        }
    }
}
