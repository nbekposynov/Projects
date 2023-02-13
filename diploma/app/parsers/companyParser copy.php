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
    global $conn;
    $sql = "SELECT p.*, u.username FROM users AS p JOIN companies AS u ON p.id=u.id WHERE company_id=?";

    $stmt = executeQuery($sql, ['published' => 1, 'company_id' => $topic_id]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
      endif; ?>

      
function getPostsByTopicId($topic_id)
{
    global $conn;
    $sql = "SELECT p.*, u.username FROM users AS p JOIN companies AS u ON p.id=u.id WHERE p.published=? AND topic_id=?";

    $stmt = executeQuery($sql, ['published' => 1, 'topic_id' => $topic_id]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}