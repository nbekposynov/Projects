<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
include(ROOT_PATH . "/app/parsers/profileParser.php");
$posts = array();
$postsTitle = '';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/ad551b6919.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main-pages/news.css">
    <title>Blog</title>
  </head>
  <body> <?php include(ROOT_PATH . "/app/includes/header.php"); ?> <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
    <!-- Page Wrapper -->
      <!-- Facebook Page Plugin SDK -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=285071545181837&autoLogAppEvents=1">
  </script>
    <div class="main-content-wrapper">
      <div class="main-content-grid">
        <!--main content grid right-->
        <div class="left-column">
          <!--left-column-->
          <div class="sidebar-left">
            <!--SideBar left-->
            <div class="fb-page" data-href="https://www.facebook.com/MDAI.KZ/" data-small-header="false"
          data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://web.facebook.com/codingpoets/" class="fb-xfbml-parse-ignore"><a
              href="https://web.facebook.com/codingpoets/">Coding Poets</a></blockquote>
        </div>
          </div>
          <!--//SideBar left-->
        </div>
        <div class="news-feed">
          <!--News-feed --> <?php foreach ($posts as $post): ?> <div class="news-post aos" data-aos="fade-up" data-aos-delay="0" data-aos-offset="150" data-aos-once="true">
            <div class="post-preview-pic">
              <!--Avatar and nickname-->
              <div class="profile-pic"></div>
              <div class="row">
                <div class="post-preview-name"> <?php echo $post['username']; ?> </div>
                <div class="post-preview-item"> <?php echo $post['created_at']; ?> </div>
              </div>
            </div>
            <!--Main part-->
            <div class="post-img">
              <img src="
																	<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-img">
            </div>
            <div class="post-preview-title">
              <p>
                <a href="single.php?id=
																			<?php echo $post['id']; ?>"> <?php echo $post['title']; ?> </a>
              </p>
            </div>
            <div class="post-preview-text">
              <p> <?php echo html_entity_decode(substr($post['body'], 0, 250) . '...'); ?> </p>
            </div>
            <hr class="hr-divider">
            </hr>
            <div class="post-preview-button">
              <a href="single.php?id=
																		<?php echo $post['id']; ?>" class="btn read-more">Читать </a>
            </div>
          </div> <?php endforeach; ?>
        </div>
        <!--//News-feed -->
        <div class="right-column">
          <!--right-column-->
          <div class="sidebar-right" class="aos aos--first" data-aos="fade-left" data-aos-delay="50" data-aos-offset="50" data-aos-once="true">
            <!--SideBar right-->
            <div class="section-search">
              <p class="">Поиск</p>
              <form action="news.php" method="post">
                <input type="text" name="search-term" class="text-input" placeholder="Искать...">
              </form>
            </div>
            <div class="section-topics">
              <p class="section-title">Разделы</p>
              <ul> <?php foreach ($topics as $key => $topic): ?> <li>
                  <a href="
																					<?php echo BASE_URL . '/news.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"> <?php echo $topic['name']; ?> </a>
                </li> <?php endforeach; ?> </ul>
            </div>
          </div>
          <!--//SideBar right-->
        </div>
        <!--/right-column-->
      </div>
      <!--//main content grid -->
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