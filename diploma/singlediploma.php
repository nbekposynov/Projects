<?php include("path.php"); ?> <?php include(ROOT_PATH . '/app/controllers/diplomas.php');

if (isset($_GET['id'])) {
  $post = selectOne('diplomas', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('diplomas', ['published' => 1]);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main-pages/diploma.css">
    <title> <?php echo $post['title']; ?> | AwaInspires </title>
  </head>
  <body>
    <div id="layer2" class="background-triangle"></div>
    <!-- Facebook Page Plugin SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=285071545181837&autoLogAppEvents=1"></script> <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- Page Wrapper -->
    <div class="main-content-wrapper">
      <!-- Main Content Wrapper -->
      <div class="single">
        <div class="post-content"></div>
      </div>
      <div class="angry-grid">
        <!--diploma-single-grid-->
        <div class="diploma-single-post-container aos aos--first" data-aos="zoom-in" data-aos-delay="0" data-aos-offset="0" id="item-0">
          <div class="title"> <?php echo $post['title']; ?> </div>
          <br>
          <div class="diploma-single-grid ">
            <div>
              <h3>Предприятие:</h3>
            </div>
            <div> <?php echo html_entity_decode($post['dcompany']); ?> </div>
          </div>
          <br>
          <div class="diploma-single-grid">
            <div>
              <h3>Куратор:</h3>
            </div>
            <div> <?php echo html_entity_decode($post['mentor']); ?> </div>
          </div>
        </div>
        <div class="diploma-single-post-container aos aos--first" data-aos="zoom-in" data-aos-delay="50" data-aos-offset="0" data-aos-once="true" id="item-1">
          <div class="diploma-single-grid">
            <h3>Требования к студенту:</h3>
            <br> <?php echo html_entity_decode($post['requirements']); ?>
          </div>
        </div>
        <div class="diploma-single-post-container aos aos--first" data-aos="zoom-in" data-aos-delay="100" data-aos-offset="0" data-aos-once="true" id="item-2">
          <div class="diploma-single-grid">
            <h3>Ожидаемые результаты:</h3>
            <br> <?php echo html_entity_decode($post['results']); ?>
          </div>
        </div>
        <div class="diploma-single-post-container aos aos--first" data-aos="zoom-in" data-aos-delay="150" data-aos-offset="0" data-aos-once="true" id="item-3">
          <div class="diploma-single-grid">
            <h3>Описание проекта:</h3>
            <br> <?php echo html_entity_decode($post['description']); ?>
          </div>
        </div>
       
  
       
      </div>
      <br>
     <center>
     <?php if(!$_SESSION['admin'] and !$_SESSION['company']): ?>
  
     <form  method="post" action="apply-request.php" >
          <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']?>">
          <input type="hidden" name="user_name" value="<?php echo $_SESSION['name']?>">
          <input type="hidden" name="user_lastname" value="<?php echo $_SESSION['lastname']?>">
          <input type="hidden" name="user_diploma" value="<?php echo $post['title']?>">
          <input type="hidden" name="user_diploma_id" value="<?php echo $post['id']?>">
          <input type="hidden" name="user_cname" value="<?php echo $post['dcompany']?>">
         <button type="submit" class ="btn btn-read-more ">Подать</button> 
            
          </form> 
        <br>
        <?php endif; ?>
        </center>
      <!-- // Main Content -->
    </div>
    <!-- // Page Wrapper --> <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/landing-scroll.js"></script>
  </body>
</html>