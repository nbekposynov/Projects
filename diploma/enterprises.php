<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/companies.php");
$posts = array();

$posts =  getPublishedCompanies()
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
  <link rel="stylesheet" href="assets/css/main-pages/enterprises.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Предприятия</title>
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
        <br>
  <center> <h1> Электронная промышленность <h1> 
    <br>
  <img src =https://www.gov.kz/uploads/2019/7/26/e49c6e5476e9dde9676bd6b9c0e76f9f_1280x720.jpg width="720" height="400">  </center>
  <div class="text">
    <p> Развитие электронной промышленности во многих странах является приоритетным направлением в экономике. Казахстан находится на стадии становления и развития отечественной электронной промышленности.
  <p> На сегодня, эта отрасль представлена 64 действующими организациями, производящими в том числе: коммуникационное оборудование, профессиональную электронику, приборы учета, компьютеры и периферийное оборудование, электронные элементы и платы, а также медицинское оборудование. Причем трудятся на этих предприятиях 1573 человека, а основная доля производств базируется в городах Нур-Султан и Алматы.</p>
  <p> Согласно официальным данным, за 2019 год объем производства продукции электронной промышленности составил 44,5 млрд. тенге,  увеличившись, по сравнению с 2018 годом, на 35%, экспорт продукции электронной промышленности за этот же период составил 36,2 млрд. тг., что на 24% больше, чем в 2018 году. </p>
  <p>В целях стимулирования роста отечественного содержания в электронной промышленности на сегодня законодательно закреплено понятие и компетенции «уполномоченного органа в сфере электронной промышленности», а также понятие «электронная промышленность». </p>
  <p>Кроме того, для обеспечения информационной безопасности в государственных органах ведутся работы по включению продукции электронной промышленности в Реестр доверенного программного обеспечения и продукции электронной промышленности. В 2019 году приняты поправки в законодательстве о государственных закупках, согласно которым продукция, включенная в Реестр, закупается в приоритетном порядке. </p>
  <p>Что касается закупок квазигосударственного сектора, в целях поддержки отечественных производителей новой продукции, АО «ФНБ «Самрук-Казына» разработан механизм заключения оффтэйк-договоров.</p>
  <p>На сегодня в Казахстане подготовка специалистов в области электронной промышленности осуществляется в более чем 30 ВУЗах (государственных и частных). Министерством совместно с НПП РК «Атамекен» разработан и утвержден профессиональный стандарт с учетом рынка труда в области электронной промышленности «Изготовление радиотехнических, электронных изделий» для 5 профессий, на основании которого МОН РК будут обновлены образовательные программы ВУЗов и колледжей.<p>
  <p>13 декабря 2019 года на «Дне индустриализации» Министерством презентовано 14 наименований товарной продукции следующих компаний: ТОО «Digital System Servis», ТОО «Корпорация Сайман», ТОО «Орион Системс» и ТОО «Кaztechinnovations». Подготовлен каталог предприятий электронной промышленности Казахстана. На регулярной основе проводятся семинары, совещания, встречи с предприятиями электронной промышленности, потенциальными отечественными и зарубежными потребителями. </p>


    </div>
  <center><H1>Предприятия</H1></center>


<div class="ent-grid">
<?php $delay_count=0; ?>
  <?php foreach ($companies as $key => $company): ?>


          <a class="ent-holder aos" href="single-enterprise.php?id=<?php echo $company['id']; ?> " data-aos="fade-left" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true">
          <div>
              <img width="100%" src="<?php echo $company['image']; ?>">
          </div>
          <div class="cname">
                <p><?php echo $company['cname']; ?><p>
          </div>
          <div class="cbody">
          <p> <?php echo (substr($company['body'], 0, 200) . '...'); ?> </p>
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