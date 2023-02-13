<?php

function validateCompanies($faculty)
{
    $errors = array();

    if (empty($faculty['cname'])) {
        array_push($errors, 'Заполните название компании');
    }

    $existingTopic = selectOne('companies', ['cname' => $post['cname']]);
    if ($existingTopic) {
        if (isset($post['update-company']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'Такое название уже существует');
        }

        if (isset($post['add-company'])) {
            array_push($errors, 'Такое название уже существует');
        }
    }

    return $errors;
}
