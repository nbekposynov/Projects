<?php

include_once(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");


$table = 'users';

$admin_users = selectAll($table);

$companies=selectAll('companies');

$errors = array();
$id = '';
$username = '';
$name='';
$lastname='';
$admin = '';
$email = '';
$password = '';
$passwordConf = '';

$company="";
$cname="";

function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['name']=$user['name'];
    $_SESSION['lastname']=$user['lastname'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['company'] = $user['company'];
    $_SESSION['cname'] = $user['cname'];
    $_SESSION['student'] = $user['student'];
    $_SESSION['message'] = 'Вы вошли в аккаунт';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php'); 
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

if (isset($_POST['register-btn']) || isset($_POST['add-user'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['add-user']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = 'Админ был создан';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/admin/users/index.php'); 
            exit();
        } 
        
        if (isset($_POST['company'])) {
            $_POST['company'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = 'Организация была создана';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/admin/users/index.php'); 
            exit();
        }
        
        
        else {
            $_POST['admin'] = 0;
            $_POST['company'] = 0;
            
            $user_id = create($table, $_POST);
            $_SESSION['message'] = 'Студент был создан';
            $_SESSION['type'] = 'success';
            $cname = $_POST['cname'];
            $user = selectOne($table, ['id' => $user_id]);
            //loginUser($user); test
        }
    } else {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $admin = isset($_POST['company']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}

if (isset($_POST['update_user'])) {
    $id = $_POST['id'];
    unset($_POST['passwordConf'], $_POST['update_user'], $_POST['id']);
    //$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $count = update($table, $id, $_POST);
    $_SESSION['message'] = 'Успешно изменено';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/profile.php?id='.$id)."&editing=0"; 
    exit();
}


if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);
    
    $name = $user['name'];
    $lastname = $user['lastname'];
    $id = $user['id'];
    $username = $user['username'];
    $admin = $user['admin'];
    $cname=$user['cname'];
    
}


if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
           array_push($errors, 'Неправильные данные');
        }
    }
    
    $username = $_POST['username'];
    $password = $_POST['password'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = 'Админ был удален';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/users/index.php'); 
    exit();
}

//avatar upload
if (isset($_POST['add-user']) || isset($_POST['update-user'])) {
    $errors = validateUser($_POST);
    adminOnly();
   

    if (!empty($_FILES['avatar']['name'])) {
        $avatar_name = time() . '_' . $_FILES['avatar']['name'];
        $av_destination = ROOT_PATH . "/assets/images/" . $avatar_name;

        $av_result = move_uploaded_file($_FILES['avatar']['tmp_name'], $av_destination);

        if ($av_result) {
           $_POST['avatar'] = $avatar_name;
        } else {
            array_push($errors, "Failed to upload avatar");
        }
    }
}

