<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = '';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
  
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ad551b6919.js" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets\css\main-pages\diploma.css">
  <title>Кадровый резерв</title>
</head>
<style>
    

    .type1{
 
  background-image: url("https://i.postimg.cc/jSnBBKpW/kek.jpg");
  background-size: cover;
  vertical-align: middle;
  width: 20%;
  height: 200px;
  margin-right: 0px;
  border-radius: 100%;
  float:left;
  transition: transform .3s; /* Animation */
margin-left: 55px;
}
.type1:hover{
  transform: scale(1.1);
}
.type2{
 
 background-image: url("https://i.postimg.cc/xTDsqHhd/91b39f81-e78d-457e-aaa0-01be20eb0488.jpg");
 background-size: cover;
 vertical-align: middle;
 border-radius: 100%;
 width: 20%;
 height: 200px;
float:left;
margin-left:10px;
transition: transform .3s; /* Animation */


}
.type2:hover{
  transform: scale(1.1);
}
.type3{
 
 background-image: url("https://i.postimg.cc/h43yn6bV/kek3.jpg");
 background-size: cover;
 width: 20%;
 height: 200px;
 float:left;
 margin-left:55px;
 margin-top:50px;
 border-radius: 100%;
 transition: transform .3s; /* Animation */
}
.type3:hover{
  transform: scale(1.1);
}
.type4{
 
 background-image: url("https://i.postimg.cc/XJZbNFh8/f1264c59-d800-4634-821b-9e3ba0dc5e78.jpg");
 background-size: cover;
 vertical-align: middle;
 width: 20%;
 height: 200px;
float:left;
margin-left:10px;
margin-top:50px;
border-radius: 100%;
transition: transform .3s; /* Animation */
}
.type4:hover{
  transform: scale(1.1);
}
.type1text{
  color: black;
  font-size: 35%;
  text-align: center;
  width: 34%;
  height: 240px;
  display:table-cell;
vertical-align:bottom;
  
}
    </style>    

    


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
  <center><H1>
Студенты отличившиеся достижениями</H1>
  <br>

  <table class="diploma-table">
  <thead > 
    <tr>
      <th><p>Имя</p></th>
      <th class="left"><p>Фамилия</p></th>
      <th class="left"><p>Университет</p></th>
      <th class="left"><p>Город</p></th>
    </tr>
  </thead>
  <?php $delay_count=0; ?>
  <?php foreach ($posts as $post): ?>
    
  <tbody>
    <tr>
      <td class="aos aos--first" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> <a href="singlediploma.php?id=<?php echo $post['id']; ?>"> Нарулан </a></td>
      <td class="aos aos--second" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true">Бауыржанулы</td>
      <td class="aos aos--thirst" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> Astana IT</td>
      <td class="aos aos--fourth city" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>"  data-aos-offset="50" data-aos-once="true"> Нур-Султан</td>
    </tr>
    <tr>
      <td class="aos aos--first" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> <a href="singlediploma.php?id=<?php echo $post['id']; ?>">Алмат </a></td>
      <td class="aos aos--second" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true">Сапаров</td>
      <td class="aos aos--thirst" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> ЕНУ</td>
      <td class="aos aos--fourth city" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>"  data-aos-offset="50" data-aos-once="true"> Нур-Султан</td>
    </tr>
    <tr>
      <td class="aos aos--first" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> <a href="singlediploma.php?id=<?php echo $post['id']; ?>">Алмат </a></td>
      <td class="aos aos--second" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true">Сапаров</td>
      <td class="aos aos--thirst" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> ЕНУ</td>
      <td class="aos aos--fourth city" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>"  data-aos-offset="50" data-aos-once="true"> Нур-Султан</td>
    </tr>
    <tr>
      <td class="aos aos--first" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> <a href="singlediploma.php?id=<?php echo $post['id']; ?>">Алмат </a></td>
      <td class="aos aos--second" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true">Сапаров</td>
      <td class="aos aos--thirst" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> ЕНУ</td>
      <td class="aos aos--fourth city" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>"  data-aos-offset="50" data-aos-once="true"> Нур-Султан</td>
    </tr>
    <tr>
      <td class="aos aos--first" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> <a href="singlediploma.php?id=<?php echo $post['id']; ?>">Алмат </a></td>
      <td class="aos aos--second" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true">Сапаров</td>
      <td class="aos aos--thirst" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>" data-aos-offset="50" data-aos-once="true"> ЕНУ</td>
      <td class="aos aos--fourth city" data-aos="fade-in" data-aos-delay="<?php echo $delay_count * 50; ?>"  data-aos-offset="50" data-aos-once="true"> Нур-Султан</td>
    </tr>
  </tbody>
  <?php $delay_count++; ?>
  <?php endforeach; ?>
</table>


        </center>

     




        
 


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

</body>

</html>