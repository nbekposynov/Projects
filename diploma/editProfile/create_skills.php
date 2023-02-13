<?php include("./../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/skills.php");
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

                    <form class="form-div" action="create_skills.php" method="post">
                        <div class="form-div-row">
                            <label>Навык</label>
                            <input type="text" name="skill_name" class="text-input">
                        </div>

                        </div>
                       

                        <div>
                            <button type="submit" name="add-post" class="btn btn-big">Добавить</button>
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