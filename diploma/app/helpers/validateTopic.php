<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Заполните Тему');
    }

    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic) {
        if (isset($post['update-topic']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'Такое имя уже существует');
        }

        if (isset($post['add-topic'])) {
            array_push($errors, 'Такое имя уже существует');
        }
    }

    return $errors;
}
