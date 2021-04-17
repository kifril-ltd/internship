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

/**
 * getArrayMinValue -- получение минимального элемента массива
 *
 * @param  array $array -- массив
 * @return int
 */
function getArrayMinValue(array $array) : int {
    $min = $array[0];
    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}

/**
 * getArrayMaxValue -- получение максимального элемента массива
 *
 * @param  array $array -- массив
 * @return int
 */
function getArrayMaxValue(array $array) : int {
    $max = $array[0];
    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

/**
 * getArrayAvgValue -- получение среднего значения элементов массива
 *
 * @param  array $array -- массив
 * @return float
 */
function getArrayAvgValue(array $array) : float {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum / count($array);
}

$rand_array = getRandomArray(50, 0, 1000);

echo "------------Собственные функции------------<br>";
echo 'Минимальное значение: ' . getArrayMinValue($rand_array) . '<br>';
echo 'Максимальное значение: ' . getArrayMaxValue($rand_array) . '<br>';
echo 'Среднее значение: ' . getArrayAvgValue($rand_array) . '<br>';

echo "------------Встроенные функции------------<br>";
echo 'Минимальное значение: ' . min($rand_array) . '<br>';
echo 'Максимальное значение: ' . max($rand_array) . '<br>';
echo 'Среднее значение: ' . array_sum($rand_array) / count($rand_array) . '<br>';
