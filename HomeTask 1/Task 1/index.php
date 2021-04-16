<?php

/**
 * convertDays2Sec -- Перевод суток в секунды
 *
 * @param  int $days -- количество суток
 * @return int
 */
function convertDays2Sec(int $days) : int {
    return $days * 86400;
}

// Проверка, что массив GET не пуст и что в нем есть ключ days
if (!empty($_GET) && array_key_exists('days', $_GET)) {
    // пытаемся вызвать функцию convertDays2Sec
    try {
        echo convertDays2Sec($_GET['days']);
    } 
    catch (Error $e) {
        echo 'Ошибка: ' . $e->getMessage();
    }
}