<?php

function validateFaculty($faculty)
{
    $errors = array();

    if (empty($faculty['name'])) {
        array_push($errors, 'Заполните факультет');
    }

    $existingTopic = selectOne('faculties', ['name' => $post['name']]);
    if ($existingTopic) {
        if (isset($post['update-faculty']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'Такое имя уже существует');
        }

        if (isset($post['add-faculty'])) {
            array_push($errors, 'Такое имя уже существует');
        }
    }

    return $errors;
}
