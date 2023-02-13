<?php include("path.php"); ?> <?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main-pages/news.css">
    <title> <?php echo $post['title']; ?> | AwaInspires </title>
  </head>
  <body>
    <div id="layer2" class="background-triangle"></div>
    <!-- Facebook Page Plugin SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=285071545181837&autoLogAppEvents=1"></script> <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <!-- Content -->
      <div class="content clearfix">
        <!-- Main Content Wrapper -->
        <div class="main-content-wrapper">
          <div class="single">
            <img width="100%" height="20%" src="
														<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
            <div class="single-title">
              <p class="post-title"> <?php echo $post['title']; ?> </p>
            </div>
            <div class="post-preview-item single-title"> <?php echo $post['created_at']; ?> </div>
            <hr class="hr-divider-single">
            </hr>
            <div class="post-content">
              <div class="single-text"> <?php echo html_entity_decode($post['body']); ?> </div>
            </div>
          </div>
        </div>
        <!-- // Main Content -->
      </div>
      <!-- // Content -->
    </div>
    <!-- // Page Wrapper --> <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
  </body>
</html>