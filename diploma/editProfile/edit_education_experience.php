<?php 
    include("./../path.php");
    include(ROOT_PATH . "/app/controllers/education_ex.php");
    $id = $_GET["id"];
    $education_info = get_education_info($id);
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
        <link rel="stylesheet" href="./../assets/css/style.css">
        <link rel="stylesheet" href="./../assets/css/forms.css">
  

       
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="page-wrapper">



            <!-- Admin Content -->
            <div class="post-content">
                


                <div class="content">


                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form class="form-div" action="#" method="post">
                        <div class="form-div-row">
                            <label>Степень</label>
                            <input type="text" name="degree" value='<?php echo $education_info['degree'] ?>' class="text-input">
                        </div>

                        <div class="form-div-row">
                            <label>Специальность</label>
                            <input type="text" name="major" value='<?php echo $education_info['major'] ?>'  class="text-input">
                        </div>

                        <div class="form-div-row">
                            <label>Университет</label>
                            <input type="text" name="university" value='<?php echo $education_info['university'] ?>'  class="text-input">
                        </div>
                        
                        <div class="form-div-row">
                            <label>Начало обучения</label>
                            <input type="text" name="starting_year" value='<?php echo $education_info['starting_year'] ?>' class="text-input">
                        </div>
                        
                        <div class="form-div-row">
                            <label>Конец обучения</label>
                            <input type="text" name="ending_year" value='<?php echo $education_info['ending_year'] ?>' class="text-input">
                        </div>

                        <div class="form-div-row">
                            <label>Описание</label>
                            <textarea name="description"><?php echo $education_info['description'] ?></textarea>  
                        </div>

                        <div>
                            <input type="text" name="id" value='<?php echo $education_info['id'] ?>' hidden>
                            <button type="submit" name="update-education" class="btn btn-big" >Изменить</button>
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