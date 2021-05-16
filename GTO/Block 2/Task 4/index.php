<?php

function isGoodYear(int $year) : bool {
    $year_digits = str_split((string)$year);
    $digits_set = [];

    foreach ($year_digits as $digit) {
        $digits_set[$digit] = true;
    }
    
    return count($digits_set) == 4;
}

$year = (int)readline();

$cur_year = $year + 1;

while (!isGoodYear($cur_year)) {
    $cur_year++;
}

echo($cur_year);
