<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateDiploma.php");

$table = 'diplomas';

$faculties = selectAll('faculties');
$posts = selectAll($table);

$companies=selectAll('companies');
$company_id="";

$errors = array();
$id = "";
$title = "";

$mentor="";
$location="";
$description="";
$results="";
$requirements="";
$faculty_id = "";
$published = "";
$dcompany="";
if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);

    $id = $post['id'];
    $title = $post['title'];

    $mentor=$post['mentor'];
    $description=$post['description'];
    $results=$post['results'];
    $requirements=$post['requirements'];
    $faculty_id = $post['faculty_id'];
    $dcompany= $post['dcompany'];
    $published = $post['published'];
    $locaiton =$post['location'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Пост успешно удален";
    $_SESSION['type'] = "success";
    if($_SESSION['company']){
        header("location: " . BASE_URL . "/admin/diplomas/company/index.php"); 
    } else
    header("location: " . BASE_URL . "/admin/diplomas/index.php"); 
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Статус публикации изменен!";
    $_SESSION['type'] = "success";
    if($_SESSION['company']){
            header("location: " . BASE_URL . "/admin/diplomas/company/index.php"); 
        } else
    header("location: " . BASE_URL . "/admin/diplomas/index.php"); 
    exit();
}



if (isset($_POST['add-post'])) {
    adminOnly();
    $errors = validatePost($_POST);

   
    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];
       
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
       
        $_POST['mentor'] = ($_POST['mentor']);
        $_POST['dcompany'] = $_SESSION['cname'];
        $_POST['location'] = ($_POST['location']);
        $_POST['description']=($_POST['description']);
        $_POST['requirements']=($_POST['requirements']);
        $_POST['results']=($_POST['results']);
    
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Пост успешно создан!";
        $_SESSION['type'] = "success";
        if($_SESSION['company']){
            header("location: " . BASE_URL . "/admin/diplomas/company/index.php"); 
        }
        else
        header("location: " . BASE_URL . "/admin/diplomas/index.php"); 
        exit();    
    } else {
        $title = $_POST['title'];
     
        $mentor = $_POST['mentor'];
        $location=$_POST['location'];
        $decsription=$_POST['description'];
        $requirements=$_POST['requirements'];
        $results=$_POST['results'];
        $faculty_id = $_POST['faculty_id'];
      
        $published = isset($_POST['published']) ? 1 : 0;
    }
}



if (isset($_POST['update-post'])) {
    adminOnly();
    $errors = validatePost($_POST);

   

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
       
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['dcompany'] = $_SESSION['cname'];
        $_POST['mentor'] = htmlentities($_POST['mentor']);
        $_POST['location'] = htmlentities($_POST['location']);
        $_POST['requirements'] = htmlentities($_POST['requirements']);
        $_POST['description'] = htmlentities($_POST['description']);
        $_POST['results'] = htmlentities($_POST['results']);
    
        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Пост успешно обновлен";
        $_SESSION['type'] = "success";
        if($_SESSION['company']){
            header("location: " . BASE_URL . "/admin/diplomas/company/index.php"); 
        }
        header("location: " . BASE_URL . "/admin/diplomas/index.php");       
    } else {
        $title = $_POST['title'];
      
    
        $location = $_POST['location'];
        $decsription=$_POST['description'];
        $requirements=$_POST['requirements'];
        $results=$_POST['results'];
        $faculty_id = $_POST['faculty_id'];
        
        $published = isset($_POST['published']) ? 1 : 0;
    }

}

