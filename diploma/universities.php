<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/universities.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
  
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ad551b6919.js" crossorigin="anonymous"></script>
     <!-- AOS -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/ad551b6919.js" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/main-pages/universities.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Вузы</title>
</head>
 

    


<body>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
  <?php include(ROOT_PATH . "/app/parsers/profileParser.php"); ?>

  <!-- Page Wrapper -->
  <div class="main-content-wrapper">


    <!-- Content -->
    <div class="content clearfix">


      <!-- Main Content -->
      <div class="main-content">
  <center><H1>
Университеты</H1>
    </center>

<div class="ent-grid">
<?php $delay_count=0; ?>
    <?php foreach ($posts as $post): ?>

      <a class="ent-holder aos"  href="university_single.php?id=<?php echo $post['id']; ?>"data-aos="fade-left" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true">
        <div>
          <img width="100%" src="<?=$post['header_image']?>" alt="">
         </div>
         <div class="cname">
                <p><?php echo $post['title']; ?><p>
          </div>
          <div class="cbody">
          <p> <?php echo (substr($post['body'], 0, 200) . '...'); ?> </p>
          </div>
      </a>
 <?php $delay_count++; ?>
          <?php endforeach ?>
    
  </div>
  
 


      </div>
      <!-- // Main Content -->
       
      

     
      
      

    </div>
    <!-- // Content -->

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