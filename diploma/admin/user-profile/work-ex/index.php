<?php include("../../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/work_ex.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../../assets/css/style.css">
        <link rel="stylesheet" href="../../../assets/css/forms.css">

        <title>Admin Section - Manage Users</title>
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

        <!--  Page Wrapper -->
        <div class="page-wrapper">

  


            <!-- Admin Content -->
            <div class="post-content">
               
                <div class="content">
                    
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Добавить должностть</a>
                    <a href="index.php" class="btn btn-big">Назад</a>
                </div>    

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                    <table class ="form-holder">
                        <thead>
                            <th>№</th>
                            <th>Должность</th>
                            <th>Описание</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                        <?php foreach ($posts as $key => $post): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $post['work_ex_name'] ?></td>
                                    <td><?php echo $post['work_ex_desc'] ?></td>
                                    <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                                    <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>

                                   
                                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../assets/js/scripts.js"></script>

    </body>

</html>