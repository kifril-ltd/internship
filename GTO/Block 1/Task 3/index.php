<?php

$number = readline();
$digits = str_split($number);
rsort($digits);

echo implode($digits);
