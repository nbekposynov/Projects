<?php


function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'Заполните название');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Заполните содержание');
    }

    if (empty($post['topic_id'])) {
        array_push($errors, 'Выберите тему');
    }



    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Пост с таким названием уже существует');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Пост с таким названием уже существует');
        }
    }

    return $errors;
}