<?php


include_once(ROOT_PATH . "/app/helpers/validateProfile.php");
include_once(ROOT_PATH . "/app/database/db.php");
$table = 'user_profile_skills';


$posts = selectAll($table);


$errors = array();
$id = "";
$skill_name="";


// if (isset($_GET['id'])) {
//     $post = selectOne($table, ['id' => $_GET['id']]);

//     $id = $post['id']; 
//     $education_ex_degree = $post['work_ex_name'];
//     $education_ex_major = $post['work_ex_desc'];
//     $education_ex_university = $post['work_ex_desc'];
//     $education_ex_starting_year = $post['work_ex_desc'];
//     $education_ex_ending_year = $post['work_ex_desc'];
//     $education_ex_description = $post['work_ex_desc'];
// }

if (isset($_GET['delete_skill_id'])) {
    // adminOnly();
    $count = delete($table, $_GET['delete_skill_id']);
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
    header("location: " . BASE_URL . "/editProfile/create_skills.php");   
    exit();    
    
}


if (isset($_POST['update-post'])) {
    adminOnly();
    $errors = validatePost($_POST);

  

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
      
         $_POST['work_ex_name'] =  htmlentities($_POST['work_ex_name']);
        $_POST['work_ex_desc'] =  htmlentities($_POST['work_ex_desc']);
        $_POST['company'] = ($_POST['company']);
    
        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/user-profile/work-ex/index.php");       
    } else {
        $work_ex_name = $_POST['work_ex_name'];
        $work_ex_desc = $_POST['work_ex_desc'];
        $compnay = $_POST['company'];
       
    }

}