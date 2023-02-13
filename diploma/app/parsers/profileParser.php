<?php if (isset($_SESSION['id'])):
        $headerQuery = "SELECT * FROM `users` WHERE id = '{$_SESSION["id"]}'";
        $runHeaderQuery = mysqli_query($conn, $headerQuery);

        if(!$runHeaderQuery){
            echo "connection failed";
        }else{
            $info = mysqli_fetch_assoc($runHeaderQuery);
        }
      endif; ?>