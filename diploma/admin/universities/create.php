<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/universities.php"); 

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

                    <h2 class="page-title">Добавить ВУЗ</h2>

                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                    <form class="create-form" action="create.php" method="post">
                        <div class="create-form-holder">
                            <label>Название университета</label>
                            <input type="text" name="title" class="text-input">
                        </div>

                        <div class="create-form-holder">
                            <label>Ссылка на логотип</label>
                            <input type="text" name="header_image" class="text-input">
                        </div>

                        <div class="create-form-holder">
                            <label>Ссылка на фотографию университета</label>
                            <input type="text" name="image" class="text-input">
                        </div>

                        <div class="create-form-holder">
                            <label>Описание</label>
                            <input type="text" name="body" class="text-input">
                        </div>
                       
                        
                        <div class="create-form-holder">
                            <label>Итого по карьерным перспективам</label>
                            <input type="text" name="perspective_total" id="perspective_total"  class="text-input-small">
                        </div>

                        <div class="create-form-holder">
                            <label>Итого по экспертной оценке</label>
                            <input type="text" name="expert_assessment_total" id="expert_assesment_totall"  class="text-input-small">
                        </div>
                        
                        <div class="create-form-holder">
                            <label>Итого по статистическим данным </label>
                            <input type="text" name="statistical_data_achievement_total" id="statistical_data_achievment_total"  class="text-input-small">
                        </div>
                        

                        
                        <div class="create-form-holder">
                            <label>Итого общее</label>
                            <input type="text" name="overall_total" id="overall_total"  class="text-input-small">
                        </div>
                        
                        <div class="create-form-holder">
                            <label>Медианная заработная плата</label>
                            <input type="text" name="msalary" id="msalary" class="text-input-small">
                        </div>
                        
                        <div class="create-form-holder">
                            <label>Уровень трудоустройства (в %)</label>
                            <input type="text" name="employment_rate" id="employment_rate" class="text-input-small">
                        </div>
                        

                        <div class="create-form-holder">
                            <label>Продолжительность поиска работы (в месяцах)</label>
                            <input type="text" name="job_search_duration" id="job_search_duration" class="text-input-small">
                        </div>
                        
                        <div class="create-form-row">
                            <div>
                                <button type="submit" name="add-post" class="btn btn-big">Добавить университет</button>
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