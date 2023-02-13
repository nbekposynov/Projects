<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$table = 'diplomas';
$posts = selectAllbyCompany($table);



$errors = array();
$id = "";
$title = "";
$dcompany = "";
$mentor="";
$location="";
$description="";
$results="";
$requirements="";
$faculty_id = "";
$published = "";

if (isset($_SESSION['id'])):
        $headerQuery = "SELECT * FROM `diplomas` WHERE user_id = '{$_SESSION["id"]}'";
        $runHeaderQuery = mysqli_query($conn, $headerQuery);

        if(!$runHeaderQuery){
            echo "connection failed";
        }else{
            $info = mysqli_fetch_assoc($runHeaderQuery);
        }
      endif; ?>