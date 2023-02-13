<?php


include_once(ROOT_PATH . "/app/helpers/validateProfile.php");
include_once(ROOT_PATH . "/app/database/db.php");
$table = 'user_profile_education';


$posts = selectAll($table);


$errors = array();
$id = "";
$education_ex_degree="";
$education_ex_major="";
$education_ex_university="";
$education_ex_starting_year="";
$education_ex_ending_year="";
$education_ex_description="";

if (isset($_GET['education-id'])) {
    $post = selectOne($table, ['id' => $_GET['education-id']]);

    $id = $post['id']; 
    $education_ex_degree = $post['work_ex_name'];
    $education_ex_major = $post['work_ex_desc'];
    $education_ex_university = $post['work_ex_desc'];
    $education_ex_starting_year = $post['work_ex_desc'];
    $education_ex_ending_year = $post['work_ex_desc'];
    $education_ex_description = $post['work_ex_desc'];
}

function get_education_info($id){
    return selectOne('user_profile_education', ['id' => $id]);
}

if (isset($_GET['delete_education_id'])) {
    // adminOnly();
    $count = delete($table, $_GET['delete_education_id']);
    $_SESSION['message'] = "Post deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL ."/profile.php?id=".$_GET['current_id'])."&editing=0";   
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
   
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Post published state changed!";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/user-profile/work-ex/index.php");   
    exit();
}

if (isset($_POST['add-post'])) {
    // adminOnly();

   
    unset($_POST['add-post']);
    $_POST['user_id'] = $_SESSION['id'];    

    $post_id = create($table, $_POST);
    $_SESSION['message'] = "Post created successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/editProfile/create_education_experience.php");   
    exit();    
    
}


if (isset($_POST['update-education'])) {
    $id = $_POST['id'];
    unset($_POST['update-education'], $_POST['id']);

    $post_id = update($table, $id, $_POST);
    $_SESSION['message'] = "Post updated successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/editProfile/edit_education_experience.php?id=" . $id);       
}