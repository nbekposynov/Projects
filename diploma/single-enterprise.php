<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/companies.php'); ?>

<?php
    if (isset($_GET['id'])) {
        $company = selectOne('companies', ['id' => $_GET['id']]);
    }

    $companies = selectAll('companies', ['published' => 1]);

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

  <title>Предприятие</title>
</head>
<body>


<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
  <?php include(ROOT_PATH . "/app/parsers/profileParser.php"); ?>
    
   <!-- Page Wrapper -->
   <div class="main-content-wrapper">

     <!-- Content -->
     <div class="content clearfix">

     <div class="ent-single-grid"> 

    
   <div class="aos" data-aos="fade-right" data-aos-delay="0" data-aos-offset="0" data-aos-once="true">
        <img width="500px;" src="<?php echo $company['image'] ?>"/>
   </div>

    <div class="ent-body" class="aos" data-aos="fade-up" data-aos-delay="50" data-aos-offset="0" data-aos-once="true">
    <div class="ent-title"><h1><?php echo $company['cname'] ?></h1> </div>
    <div class="ent-single-row"> <h3>CEO:</h3> <h3><?php echo $company['ceo'] ?></h3> </div>
    <div class="ent-single-row"> <h3>Основана:</h3> <h3><?php echo $company['created_at'] ?></h3> </div>
    <p><?php echo $company['body'] ?></p>
    </div>

</div>
    

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