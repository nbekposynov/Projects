<?php

 include(ROOT_PATH . "/app/database/dbc.php");

 

function getUserData($id)
{   
    $sql = "SELECT * FROM users ";
    $result = $conn->query($sql);
    $array=array();
    while($row = $result->fetch_assoc()) {
        $array['id']=$row['id'];
        $array['name']=$row['name'];
        $array['lastname']=$row['lastname'];
        $array['username']=$row['username'];
      }
      return $array;
}

function getId($username)
{   
    $conn = db();
    $sql = mysqli_query($conn,"SELECT 'id' FROM 'users' WHERE 'username'='".$username."'");
    while($row = mysqli_fetch_assoc($sql)) {
        return $row['id'];
       
      }
}
?>