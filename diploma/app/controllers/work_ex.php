<?php


include_once(ROOT_PATH . "/app/helpers/validateProfile.php");
include_once(ROOT_PATH . "/app/database/db.php");
$table = 'user_profile_work';


$posts = selectAll($table);


$errors = array();
$id = "";
$work_ex_name="";
$work_ex_desc="";
$company="";

if (isset($_GET['work_id'])) {
    $post = selectOne($table, ['id' => $_GET['work_id']]);

    $id = $post['id'];
    $title = $post['title'];
    $work_ex_name = $post['work_ex_name'];
    $work_ex_desc = $post['work_ex_desc'];
    $company=$post['company'];
   
}

function get_work_info($id){
    return selectOne('user_profile_work', ['id' => $id]);
}

if (isset($_GET['delete_work_id'])) {
    // adminOnly();
    $count = delete($table, $_GET['delete_work_id']);
    $_SESSION['message'] = "Post deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/profile.php?id=".$_GET['current_id'])."&editing=0";   
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
   
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Post published state changed!";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/profile.php");   
    exit();
}

if (isset($_POST['add-post'])) {
    // adminOnly();

   
    unset($_POST['add-post']);
    $_POST['id'] = $_SESSION['id'];    
    unset($_POST['id']);
    $post_id = create($table, $_POST);
    $_SESSION['message'] = "Post created successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/editProfile/create_work_experience.php");   
    exit();    
    
}


if (isset($_POST['update-work'])) {
    $id = $_POST['id'];
    unset($_POST['update-work'], $_POST['id']);

    $post_id = update($table, $id, $_POST);
    $_SESSION['message'] = "Post updated successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/editProfile/edit_work_experience.php?id=" . $id);       
}