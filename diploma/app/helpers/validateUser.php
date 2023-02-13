<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Заполните имя пользователя');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Заполните электронную почту');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Заполните пароль');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Пароли не совпадают');
    }

    // $existingUser = selectOne('users', ['email' => $user['email']]);
    // if ($existingUser) {
    //     array_push($errors, 'Email already exists');
    // }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Электронный адрес уже занят');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'Электронный адрес уже занят');
        }
    }

    return $errors;
}


function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Заполните имя пользователя');
    }


    if (empty($user['password'])) {
        array_push($errors, 'Заполните пароль');
    }

    return $errors;
}