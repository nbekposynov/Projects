<?php 
    include("./../path.php");
    include(ROOT_PATH . "/app/controllers/work_ex.php");
    $id = $_GET["id"];
    $work_info = get_work_info($id);
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
                            <label>Должность</label>
                            <input type="text" name="work_name" value='<?php echo $work_info['work_name'] ?>' class="text-input">
                        </div>

                        <div class="form-div-row">
                            <label>Компания</label>
                            <input type="text" name="company_name" value='<?php echo $work_info['company_name'] ?>'  class="text-input">
                        </div>

                        <div class="form-div-row">
                        <label for="date">Время работы: </label>
                        <div>
                        <input type="date" id="date" value='<?php echo $work_info['work_starting_date'] ?>'  name="work_starting_date"/>
                        <input type="date" id="date" value='<?php echo $work_info['work_ending_date'] ?>'  name="work_ending_date"/>
                        </div>
                        </div>



                        <div class="form-div-row">
                            <label>Описание</label>
                            <textarea name="work_description" id="work_ex_desc"><?php echo $work_info['work_description'] ?></textarea>  
                        </div>
                       

                        <div>
                            <input type="text" name="id" value='<?php echo $work_info['id'] ?>' hidden>
                            <button type="submit" name="update-work" class="btn btn-big">Изменить</button>
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