<?php 
include("path.php");
include(ROOT_PATH . "/app/database/db.php");

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ad551b6919.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/main-pages/landing.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <title>Blog</title>
  </head>
  <body>
    <!-- <div class="landing-background-circle"></div> --> <?php include(ROOT_PATH . "/app/includes/header.php"); ?> <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
    <!-- Page Wrapper -->
    <div class="main-content-wrapper">
      <!-- Content -->
      <div class="content clearfix">
        <!-- Landing zone-->
        <div class="landing-grid">
          <div class="landing-columns">
            <div class="landing-block-1 animated bounceInLeft">
              <span class="h-text">Выпуститься</span>
              </br>
              <span class="h-text" style="color:#1a73e8;">Проще</span>
              <p class="p-text">Портал создан студентами для студентов - чтобы сделать жизнь выпускника проще , и помочь ему совершенствоваться во всех направлениях!</p>
              <a class="btn read-more landing">Узнать больше</a>
            </div>
            <div class="landing-block-2 animated fadeInUp">
              <!--<div class="landing-circle-btn">Найти!</div> -->
              <div class="landing-circle">
                <img src="
																		<?php echo BASE_URL . '/assets/images/lndng-1.png' ?>">
              </div>
            </div>
          </div>
          <div class="landing-block-3">
            <div class="landing-rows">
              <div class="landing-card aos aos--first" data-aos="flip-right" data-aos-offset="300" data-aos-delay="0">
                <!--<div class="landing-card-circle"></div> -->
                <h2>Следите за важными новостями</h2>
                <div>Ежедневно наш сайт просвещает студентов о сфере IT , и держит их в курсе последних событий. Следите за новостями на нашем портале!</div>
                <a class="btn read-more landing">Узнать больше</a>
              </div>
              <div class="landing-card aos aos--second" data-aos="flip-right" data-aos-offset="300" data-aos-delay="50">
                <!--<div class="landing-card-circle"></div> -->
                <h2>Выберите дипломную работу</h2>
                <div>Найдите интересующую вас тему среди многих отраслей : от автоматизации до телекоммуникации!</div>
                <a class="btn read-more landing">Узнать больше</a>
              </div>
              <div class="landing-card aos aos--third" data-aos="flip-right" data-aos-offset="300" data-aos-delay="100">
                <!--<div class="landing-card-circle"></div> -->
                <h2>Найдите работу мечты</h2>
                <div>Найдите подходящую стажировку от компании , предлагающих кейсы , и проявите себя в высокогруженных проектах!</div>
                <a class="btn read-more landing">Узнать больше</a>
              </div>
            </div>
          </div>
          <div class="landing-columns">
            <div class="landing-block-2 aos aos--fourth" data-aos="fade-right" data-aos-offset="300">
              <!--<div class="landing-circle-btn">Найти!</div> -->
              <div class="landing-circle">
                <img src="
																			<?php echo BASE_URL . '/assets/images/lndng-2.png' ?>">
              </div>
            </div>
            <div class="landing-block-1 aos aos--fifth" data-aos="fade-up" data-aos-offset="300">
              <span class="h-text">Думать.</span>
              </br>
              <span class="h-text" style="color:#1a73e8;">Постоянно.</span>
              <p class="p-text">Тысячи интересных тем - реализуй свои гениальные решения и встань на путь востребованного проффесионала!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Content -->
      <div class="main-content"></div>
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
    <script src="assets/js/landing-scroll.js"></script>
  </body>
</html>