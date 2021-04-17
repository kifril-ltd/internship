<?php

/**
 * reverseString -- возвращает отзеркаленную строку
 *
 * @param  string $str -- строка
 * @return string
 */
function reverseString(string $str) : string {
    $revstr = '';
    for ($i = 1; $i <= strlen($str); $i++) {
        $revstr .= $str[-$i];
    }
    return $revstr;
}

// Проверка, что массив GET не пуст и что в нем есть ключ string
if (!empty($_GET) && array_key_exists('string', $_GET)) {
    echo "------------Собственная функция------------<br>";
    echo reverseString($_GET['string']) . "<br>";
    echo "------------Встроенная функция------------<br>";
    echo strrev($_GET['string']);
}
