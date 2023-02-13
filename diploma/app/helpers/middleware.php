<?php


function usersOnly($redirect = '/index.php')
{
    if (empty($_SESSION['id'])) {
        $_SESSION['message'] = 'Сначала войдите в аккаунт';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function adminOnly($redirect = '/index.php')
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin'] || ['company'] )) {
        $_SESSION['message'] = 'Вы не авторизованы';
        $_SESSION['type'] = 'ошибка';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function companyOnly($redirect = '/index.php')
{
    if (empty($_SESSION['id']) || empty($_SESSION['company'])) {
        $_SESSION['message'] = 'Вы не авторизованы';
        $_SESSION['type'] = 'ошибка';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function guestsOnly($redirect = '/index.php')
{
    if (isset($_SESSION['id'])) {
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }    
}