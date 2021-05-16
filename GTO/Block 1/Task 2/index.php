<?php

$x = (int)readline();
$y = (int)readline();
$m = (int)readline();

echo $x * $m + intdiv($y * $m, 100), "\n", $y * $m % 100;
