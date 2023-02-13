<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateFaculty.php");

$table = 'faculties';

$errors = array();
$id = '';
$name = '';
$description = '';

$faculties = selectAll($table);


if (isset($_POST['add-faculty'])) {
    adminOnly();
    $errors = validateFaculty($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-faculty']);
        $faculty_id = create($table, $_POST);
        $_SESSION['message'] = 'Факультет успешно создан';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/faculties/index.php');
        exit(); 
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $faculty = selectOne($table, ['id' => $id]);
    $id = $faculty['id'];
    $name = $faculty['name'];
    $description = $faculty['description'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Факультет успешно удален';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/faculties/index.php');
    exit();
}


if (isset($_POST['update-faculty'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-faculty'], $_POST['id']);
        $faculty_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Факультет успешно изменен';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/faculties/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }

}
