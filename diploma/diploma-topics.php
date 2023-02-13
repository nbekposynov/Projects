<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/faculties.php");

$posts = array();
$postsTitle = 'Недавние';

if (isset($_GET['t_id'])) {
  $posts = getDiplomasByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchDiplomas($_POST['search-term']);
} else {
  $posts = getPublishedDiplomaPosts();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  	<!-- AOS -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
  
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ad551b6919.js" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/main-pages/diploma.css">
  <link rel="stylesheet" href="assets/css/main-pages/news.css">

  <title>Blog</title>
</head>

<body>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
  

  <!-- Page Wrapper -->
  <div class="main-content-wrapper">


      <div class="main-content-grid-diploma"> <!--main content grid right-->

      <div class="diploma-feed"> <!--News-feed -->

      <?php if($_SESSION['company'] ): ?>
      <a href="admin\diplomas\company\index.php?id=<?php echo $_SESSION['id']; ?>" class="btn2 diploma-company-create aos aos--first" data-aos="zoom-in" data-aos-delay="0">+</a>
      <?php endif; ?>
       <table class="diploma-table">
  <thead > 
    <tr>
      <th><p>Тема</p></th>
      <th class="left"><p>Куратор</p></th>
      <th class="left"><p>Организация</p></th>
      <th class="left"><p>Город</p></th>
    </tr>
  </thead>
  <?php $delay_count=0; ?>
  <?php foreach ($posts as $post): ?>
    
  <tbody>
    <tr>
      <td class="aos aos--first" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> <a href="singlediploma.php?id=<?php echo $post['id']; ?>"> <?php echo $post['title']; ?> </a></td>
      <td class="aos aos--second" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"><?php echo $post['mentor']; ?></td>
      <td class="aos aos--thirst" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true">  <?php echo $post['cname']; ?></td>
      <td class="aos aos--fourth city" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>"  data-aos-offset="50" data-aos-once="true"> <?php echo $post['location']; ?></td>
    </tr>
  </tbody>
  <?php $delay_count++; ?>
  <?php endforeach; ?>
</table>

 </div> <!--News-feed -->

 <div class="right-column">  <!--right-column-->


 <div class="sidebar-right" class="aos aos--first" data-aos="fade-left" data-aos-delay="50" data-aos-offset="50" data-aos-once="true"> <!--SideBar right-->

 <div class="section-search">
  <p class="">Поиск</p>
  <form action="diploma-topics.php" method="post">
    <input type="text" name="search-term" class="text-input" placeholder="Искать...">
  </form>
</div>


<div class="section-topics">
  <p class="section-title">Разделы</p>
  <ul>
    <?php foreach ($faculties as $key => $faculty): ?>
      <li><a href="<?php echo BASE_URL . '/diploma-topics.php?t_id=' . $faculty['id'] . '&name=' . $faculty['name'] ?>"><?php echo $faculty['name']; ?></a></li>
    <?php endforeach; ?>
  </ul>
</div>
</div> <!--//SideBar right-->


</div>  <!--/right-column-->


</div> <!--//main content grid -->


  </div>
  <!-- // Page Wrapper -->

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/landing-scroll.js"></script>

</body>

</html>