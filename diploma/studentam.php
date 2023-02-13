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

  <title>Студентам</title>
</head>
<style>
    

    .type1{
 
  background-image: url("https://cdn.f.kz/prod/90/89644_550.jpg");
  background-size: cover;
  vertical-align: middle;
  width: 23%;
  height: 140px;
  margin-right: 0px;
  border-radius: 10%;
  background-size: 170px 120px;

  float:left;
  transition: transform .3s; /* Animation */
margin-left: 12px;
}
.type1:hover{
  transform: scale(1.1);
}
.type2{
 
 background-image: url("https://static.insales-cdn.com/images/products/1/7300/64158852/49601915.jpg");
 background-size: cover;
 vertical-align: middle;
 border-radius: 10%;
 width: 23%;
 height: 140px;
float:left;
margin-left:10px;
transition: transform .3s; /* Animation */


}
.type2:hover{
  transform: scale(1.1);
}
.type3{
 
 background-image: url("https://m.media-amazon.com/images/I/51yr12gkjRL.jpg");
 background-size: cover;
 width: 23%;
 height: 140px;
 float:left;
 margin-left:12px;
 border-radius: 10%;
 transition: transform .3s; /* Animation */
 background-size: 170px 230px;

}
.type3:hover{
  transform: scale(1.1);
}
.type4{
 
 background-image: url("data:image/jpeg;base64,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");
 background-size: cover;
 vertical-align: middle;
 width: 23%;
 height: 140px;
float:left;
margin-left:10px;
margin-top:10px;
border-radius: 10%;
transition: transform .3s; /* Animation */
}
.type4:hover{
  transform: scale(1.1);
}
.type5{
background-image: url("https://patterns.dev/img/remote/Z2dzbwc.jpg");
 background-size: cover;
 vertical-align: middle;
 width: 23%;
 height: 140px;
float:left;
margin-left:10px;
margin-top:10px;
border-radius: 10%;
transition: transform .3s; /* Animation */
background-size: 164px 170px;

}


.type5:hover{
  transform: scale(1.1);
}
.type6{
background-image: url("https://m.media-amazon.com/images/I/51gtG44GHfL.jpg");
 background-size: cover;
 vertical-align: middle;
 width: 23%;
 height: 140px;
float:left;
margin-left:10px;
margin-top:10px;
border-radius: 10%;
transition: transform .3s; /* Animation */
background-size: 164px 170px;

}


.type6:hover{
  transform: scale(1.1);
}
.type7{
background-image: url("http://sun9-55.userapi.com/s/v1/if1/maYqb0nQDwhaODRl4dfkYWl4bXuDOtn5RPqS4cmt7ptcS26zX0hBry9altcbOI9XXvJzkQ.jpg?size=423x604&quality=96&type=album");
 background-size: cover;
 vertical-align: middle;
 width: 23%;
 height: 140px;
float:left;
margin-left:10px;
margin-top:10px;
border-radius: 10%;
transition: transform .3s; /* Animation */
background-size: 164px 170px;

}


.type7:hover{
  transform: scale(1.1);
}
.type8{
background-image: url("https://images-na.ssl-images-amazon.com/images/I/41HII-0nFEL._SY445_SX342_QL70_ML2_.jpg");
 background-size: cover;
 vertical-align: middle;
 width: 23%;
 height: 140px;
float:left;
margin-left:10px;
margin-top:10px;
border-radius: 10%;
transition: transform .3s; /* Animation */
background-size: 164px 170px;

}


.type8:hover{
  transform: scale(1.1);
}
.type9{
background-image: url("https://images-na.ssl-images-amazon.com/images/I/61ksTbaI6lL.jpg");
 background-size: cover;
 vertical-align: middle;
 width: 23%;
 height: 140px;
float:left;
margin-left:10px;
margin-top:10px;
border-radius: 10%;
transition: transform .3s; /* Animation */
background-size: 164px 170px;

}


.type9:hover{
  transform: scale(1.1);
}
.type1text{
  color: white;
  font-size: 35%;
  text-align: center;
  width: 34%;
  height: 240px;
  display:table-cell;
vertical-align:bottom;
text-shadow: 1px 1px 1px #000;

  
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


<!-- //Sidebars-->

      <!-- Main Content -->
      <div class="main-content">
        <br>
  <center><H1>Студентам</H1>
    </center>
    <br>
      <a href ="https://fktpm.ru/file/84-soversennyi-kod.pdf" class="type1">
            <div class= "type1text">
            <h1>  <h1>
        </div>
</a>
        
        <div class="type2">
            <div class= "type1text">
            <h1>  <h1>
        </div>
        </div>
        <div class="type3">
            <div class= "type1text">
            <h1>  <h1>
        </div>
        </div>
       
        <div class="type4">
            <div class= "type1text">
            <h1>  <h1>
        </div>
        </div>  
        <div class="type5">
            <div class= "type1text">
            <h1>  <h1>
        </div>
        </div> 
        <div class="type6">
            <div class= "type1text">
            <h1>  <h1>
        </div>
        </div> 
        <div class="type7">
            <div class= "type1text">
            <h1>  <h1>
        </div>
        </div> 
        <div class="type8">
            <div class= "type1text">
            <h1>  <h1>
        </div>
        </div> 
        <div class="type9">
            <div class= "type1text">
            <h1>  <h1>
        </div>
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