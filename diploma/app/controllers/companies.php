<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateCompanies.php");

$table = 'companies';

$errors = array();
$id = '';
$cname = '';
$description = '';
$published = "";
$ceo="";
$image="";
$companies = selectAll($table);


if (isset($_POST['add-company'])) {
    adminOnly();
   // $errors = validateCompanies($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-company']);
        $faculty_id = create($table, $_POST);
        $_SESSION['message'] = 'Компания успешно создана';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/companies/index.php');
        exit(); 
    } else {
        $cname = $_POST['cname'];
        $description = $_POST['description'];
        $ceo=$_POST['ceo'];
        $image=$_POST['image'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $company = selectOne($table, ['id' => $id]);
    $id = $company['id'];
    $cname = $company['cname'];
    $body = $company['body'];
    $published = $company['published'];
    $ceo=$company['ceo'];
     $image=$company['image'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Компания успешно удалена';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/companies/index.php');
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Статус поста был изменен!";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/posts/index.php"); 
    exit();
}


if (isset($_POST['update-company'])) {
    adminOnly();
   // $errors = validateTopic($_POST);

    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-company'], $_POST['id']);
        $faculty_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Компания успешно изменена';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/companies/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $cname = $_POST['cname'];
        $description = $_POST['description'];
        $published = isset($_POST['published']) ? 1 : 0;
        $ceo=$_POST['ceo'];
        $image=$_POST['image'];
    }

}
