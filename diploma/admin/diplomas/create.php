<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/diplomas.php"); 

adminOnly();
//companyOnly();
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
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">

         <!-- Forms Styling -->
         <link rel="stylesheet" href="../../assets/css/forms.css">

        <title>Admin Section - Add Post</title>
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">
        <?php if($_SESSION['admin']): ?>
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <?php endif; ?>

            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Добавить пост</a>
                    <a href="index.php" class="btn btn-big">Менджер постов</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Добавить тему</h2>

                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                    <form class="create-form" action="create.php" method="post" enctype="multipart/form-data">
                        <div class="create-form-holder">
                            <label>Тема</label>
                            <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>
                       
                        <div class="create-form-row">
                        <div class="create-form-holder">
                            <label>Куратор</label>
                            <input type="text" name="mentor" id="mentor" value="<?php echo $mentor ?>" class="text-input">
                        </div>
                        <div class="create-form-holder">
                            <label>Город</label>
                            <input type="text" name="location" id="location" value="<?php echo $location ?>" class="text-input">
                        </div>
                        <div class="create-form-holder">
                            <label>Сфера</label>
                            <select name="faculty_id" class="text-input">
                                <option value=""></option>
                                <?php foreach ($faculties as $key => $faculty): ?>
                                    <?php if (!empty($faculty_id) && $faculty_id == $faculty['id'] ): ?>
                                        <option selected value="<?php echo $faculty['id'] ?>"><?php echo $faculty['name'] ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $faculty['id'] ?>"><?php echo $faculty['name'] ?></option>
                                    <?php endif; ?>

                                <?php endforeach; ?>

                            </select>
                        </div>
                        </div>
                        <div class="create-form-holder">
                            <label>Описание</label>
                            <textarea name="description" id="description"><?php echo $description ?></textarea>
                        </div>
                        <div class="create-form-holder">
                            <label>Ожидаемые результаты</label>
                            <textarea name="results" id="results"><?php echo $results ?></textarea>
                        </div>
                        <div class="create-form-holder">
                            <label>Требования к студенту</label>
                            <textarea name="requirements" id="requirements"><?php echo $requirements ?></textarea>
                        </div>
                        <div class="create-form-row">
                        <div>
                            <?php if (empty($published)): ?>
                                <label>
                                    <input type="checkbox" name="published">
                                    Опубликовать
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="published" checked>
                                    Опубликовать
                                </label>
                            <?php endif; ?>
                           

                        </div>
                        <div>
                            <button type="submit" name="add-post" class="btn btn-big">Добавить пост</button>
                        </div>
                            </div>
                    </form>

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