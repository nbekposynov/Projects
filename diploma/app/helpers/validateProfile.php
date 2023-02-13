<?php


function validatePost($post)
{
    $errors = array();

    if (empty($post['work_ex_name'])) {
        array_push($errors, 'Заполните название');
    }

    if (empty($post['work_ex_desc'])) {
        array_push($errors, 'Заполните предприятие');
    }




    return $errors;
}