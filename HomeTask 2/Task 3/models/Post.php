<?php

class Post {
        
    /**
     * validate -- производит валидацию модели Post
     *
     * @param  array $post объект для проверки
     * @return array
     */
    public static function validate(array $post) : array {
        $errors = [];

        if (empty($post['title'])) {
            $errors[] = 'Поле заголовок является обязательным';
        }

        if (empty($post['content'])) {
            $errors[] = 'Поле текст поста является обязательным';
        }

        if (empty($post['date'])) {
            $errors[] = 'Поле дата является обязательным';
        }

        if (!date_create_from_format('d.m.Y', $post['date'])) {
            $errors[] = 'Введена некорректная дата';
        }

        return $errors;
    }
}