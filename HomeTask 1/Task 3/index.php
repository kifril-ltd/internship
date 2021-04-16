<?php

/**
 * getRandomArray -- возвращает массив из заданного числа элементов в границах min и max
 *
 * @param  int $itemCount -- число элементов
 * @param  int $min -- минимальное значение
 * @param  int $max -- максимальное значение
 * @return array
 */
function getRandomArray(int $itemCount, int $min, int $max) : array {
    $rand_array = [];
    for ($i = 0; $i < $itemCount; $i++) {
        $rand_array[] = rand($min, $max);
    }
    return $rand_array;
}

$rand_array = getRandomArray(50, 0, 1000);

echo 'Минимальное значение: ' . min($rand_array) . '<br>';
echo 'Максимальное значение: ' . max($rand_array) . '<br>';
echo 'Среднее значение: ' . array_sum($rand_array) / count($rand_array) . '<br>';