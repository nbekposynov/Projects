<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/universities.php");

$posts = array();
$postsTitle = '';

if (isset($_GET['id'])) {
  $post = selectOne('universities', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');


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
  <link rel="stylesheet" href="assets\css\main-pages\universities.css">

  <title>Вузы</title>
</head>
<style>



table {
	background: #fff;
  border-radius: 5px;
 margin:0 auto;
  
  
  
}

th {
	text-align: left ;
	
  
}

.text{
  
  border-radius: 5px;
}
.text,
table,
img {
  
  position: relative;
  animation-name: Appearance;
  animation-duration: 2s;
  animation-timing-function: cubic-bezier(.1,-.6,.2,0);
}

@-webkit-keyframes Appearance {
  0% {opacity: 0;}
}

@-o-keyframes Appearance {
  0% {opacity: 0;}
}

@-moz-keyframes Appearance {
  0% {opacity: 0;}
}

@keyframes Appearance {
  0% {opacity: 0;}
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

    <center>
      <!-- Main Content -->
      <div class="main-content">
      <div class="block-animation">
      
      
      <br>
<h2> Рейтинг Образовательных программ <h2></center>


</div>     
</div>
<br>
<div class="kxe">
	<table class="uni-table">
		<thead>
			<tr>
				<th><?php echo $post['faculty_name']; ?></th>
				
			</tr>
		</thead>
		<tr>
	   <thead>	
		<th><?php echo $post['title']; ?></th>
				
		</tr>
		</thead>
        
		<tbody>
			<tr>
				<td>Итого по карьерным перспективам выпускников (анализ трудоустройства и заработной платы)</td>
				<td><?php echo $post['perspective_total']; ?></td>
				</tr>
			   <tr>
				<td>Итого по экспертной оценке</td>
				<td><?php echo $post['expert_assessment_total']; ?></td>
			</tr>
			<tr>
				<td>Итого по статистическим данным и достижения обучающихся	</td>
				<td><?php echo $post['statistical_data_achievement_total']; ?></td>
			</tr>
			<tr>
				<td>Итого общее</td>
				<td><?php echo $post['overall_total']; ?></td>
			</tr>
			<tr>
				<td>Медианная заработная плата (в тенге)	</td>
				<td><?php echo $post['perspective_total']; ?></td>
				
			</tr>
			<tr>
				<td>Уровень трудоустройства (в %)		</td>
				<td><?php echo $post['perspective_total']; ?></td>
				
			</tr>
			<tr>
				<td>Продолжительность поиска работы (в месяцах)		</td>
				<td><?=$post['job_search_duration']?></td>

        
				
			</tr>
		</tbody>
	</table>
  <br>
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

</body>

</html>