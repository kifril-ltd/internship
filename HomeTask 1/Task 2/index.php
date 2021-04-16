<?php

/**
 * concatFullName -- склеивает ФИО через пробел
 *
 * @param  string $first_name -- имя
 * @param  string $last_name -- фамилия
 * @param  string $patronymic -- отчество
 * @return string
 */
function concatFullName(string $first_name, string $last_name, string $patronymic) : string {
    return "$last_name $first_name $patronymic";
}

// проверяем, что массив POST не пуст
if (!empty($_POST)) {
    // проверяем, что все необходимые параметры переданы
    if (array_key_exists('first_name', $_POST) && 
        array_key_exists('last_name', $_POST) &&
        array_key_exists('patronymic', $_POST)) {
            echo concatFullName($_POST['first_name'], $_POST['last_name'], $_POST['patronymic']);
        } else {
            echo 'Не передано одно из необходимых полей';
        }
}