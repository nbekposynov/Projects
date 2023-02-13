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

        <title>Admin Section - Edit Post</title>
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                <a href="create.php" class="btn btn-big">Добавить пост</a>
                    <a href="index.php" class="btn btn-big">Менджер постов</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Edit Post</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="edit.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div>
                            <label>Тема</label>
                            <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>
                       
                        <div>
                            <label>Куратор</label>
                            <input type="text" name="mentor" id="mentor" value="<?php echo $mentor ?>" class="text-input-small">
                        </div>
                        <div>
                            <label>Город</label>
                            <input type="text" name="location" id="location" value="<?php echo $location ?>" class="text-input-small">
                        </div>
                        <div>
                            <label>Описание</label>
                            <textarea name="description" id="description"><?php echo $description ?></textarea>
                        </div>
                        <div>
                            <label>Ожидаемые результаты</label>
                            <textarea name="results" id="results"><?php echo $results ?></textarea>
                        </div>
                        <div>
                            <label>Требования к студенту</label>
                            <textarea name="requirements" id="requirements"><?php echo $requirements ?></textarea>
                        </div>
                        <div>
                            <label>Сфера</label>
                            <select name="faculty_id" class="text-input-small">
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
                        <div>
                            <?php if (empty($published) && $published == 0): ?>
                                <label>
                                    <input type="checkbox" name="published">
                                    Опубликовать
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="published" checked>
                                    Сфера
                                </label>
                            <?php endif; ?>
                           

                        </div>
                        <div>
                            <button type="submit" name="update-post" class="btn btn-big">Обновить пост</button>
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