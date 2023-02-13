<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateUni.php");

$table = 'universities';

$posts = selectAll($table);


$errors = array();
$id = "";
$title = "";
$body = "";
$image="";
$header_image="";

$published = "";
$body="";
$perspective_total="";
$expert_assessment_total="";
$statistical_data_achievement_total="";
$overall_total="";
$msalary="";
$employment_rate="";
$job_search_duration="";



if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);

    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $image=$post['image'];
    $header_image=$post['header_image'];

    $perspective_total=$post['perspective_total'];
    $expert_assessment_total=$post['expert_assessment_total'];
    $statistical_data_achievement_total=$post['statistical_data_achievement_total'];
    $overall_total=$post['overall_total'];
    $msalary=$post['msalary'];
    $employment_rate=$post['employment_rate'];
    $job_search_duration=$post['job_search_duration'];

    $published = $post['published'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Post deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/posts/index.php"); 
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Post published state changed!";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/posts/index.php"); 
    exit();
}



if (isset($_POST['add-post'])) {
    adminOnly();
    $errors = validateUni($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
           $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
       array_push($errors, "Post image required");
    }
    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['image'] = ($_POST['image']);
        $_POST['header_image'] = ($_POST['header_image']);
        



        $_POST['perspective_total']=$_POST['perspective_total'];
        $_POST['expert_assessment_total']=$_POST['expert_assessment_total'];
        $_POST['statistical_data_achievement_total']=$_POST['statistical_data_achievement_total'];
        $_POST['overall_total']=$_POST['overall_total'];
        $_POST['msalary']=$_POST['msalary'];
        $_POST['employment_rate']=$_POST['employment_rate'];
        $_POST['job_search_duration']=$_POST['job_search_duration'];
      
    
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post created successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/posts/index.php"); 
        exit();    
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


if (isset($_POST['update-post'])) {
    adminOnly();
    $errors = validateUni($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
           $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
       array_push($errors, "Post image required");
    }

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['image'] = ($_POST['image']);
        $_POST['header_image'] = ($_POST['header_image']);
        

        
        $_POST['perspective_total']=$_POST['perspective_total'];
        $_POST['expert_assessment_total']=$_POST['expert_assessment_total'];
        $_POST['statistical_data_achievement_total']=$_POST['statistical_data_achievement_total'];
        $_POST['overall_total']=$_POST['overall_total'];
        $_POST['msalary']=$_POST['msalary'];
        $_POST['employment_rate']=$_POST['employment_rate'];
        $_POST['job_search_duration']=$_POST['job_search_duration'];
    
        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/posts/index.php");       
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $image=$post['image'];
        $header_image=$post['header_image'];

    $perspective_total=$post['perspective_total'];
    $expert_assessment_total=$post['expert_assessment_total'];
    $statistical_data_achievement_total=$post['statistical_data_achievement_total'];
    $overall_total=$post['overall_total'];
    $msalary=$post['msalary'];
    $employment_rate=$post['employment_rate'];
    $job_search_duration=$post['job_search_duration'];

        $published = isset($_POST['published']) ? 1 : 0;
    }

}