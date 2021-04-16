<?php

// Проверка, что массив GET не пуст и что в нем есть ключ string
if (!empty($_GET) && array_key_exists('string', $_GET)) {
    echo strrev($_GET['string']);
}
