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

    if (empty($post['image'])) {
        array_push($errors, 'Выберите тему');
    }

    if (empty($post['header_image'])) {
        array_push($errors, 'Заполните название');
    }

    if (empty($post['perspective_total'])) {
        array_push($errors, 'Заполните содержание');
    }

    if (empty($post['expert_assesment_totall'])) {
        array_push($errors, 'Выберите тему');
    }

    if (empty($post['statistical_data_achievment_total'])) {
        array_push($errors, 'Заполните название');
    }

    if (empty($post['overall_total'])) {
        array_push($errors, 'Заполните содержание');
    }

    if (empty($post['msalary'])) {
        array_push($errors, 'Выберите тему');
    }

    
    if (empty($post['employment_rate'])) {
        array_push($errors, 'Выберите тему');
    }

    
    if (empty($post['job_search_duration'])) {
        array_push($errors, 'Выберите тему');
    }





    $existingPost = selectOne('universities', ['title' => $post['title']]);
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