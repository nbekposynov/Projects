<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");
include(ROOT_PATH . "/app/controllers/work_ex.php");
include(ROOT_PATH . "/app/controllers/education_ex.php");
include(ROOT_PATH . "/app/controllers/skills.php");
include(ROOT_PATH . "/app/parsers/profileParser.php");
if (isset($_GET['id'])) {
  $user = selectOne('users', ['id' => $_GET['id']]);
  //$user = selectOne('user', ['user_id' => $user['id']]);
  $user_skills = selectAll('user_profile_skills', ['user_id' => $user['id']]);
  $user_education = selectAll('user_profile_education', ['user_id' => $user['id']]);
  $user_work = selectAll('user_profile_work', ['user_id' => $user['id']]);
  
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body> <?php include(ROOT_PATH . "/app/includes/header.php"); ?> <?php include(ROOT_PATH . "/app/includes/messages.php"); ?> <?php include(ROOT_PATH . "/app/parsers/profileParser.php"); ?>
    <!-- Main Content Wrapper -->
    <div class="main-content-wrapper">
      <div class="profile-wrapper">
        <div class="profile-header">
          <div class="profile-header-grid">
            <img src="
														<?php echo BASE_URL . '/assets/images/bolat.jpg' ?>">
            <!--img-->
            <div class="profile-header-grid-name">
              <!--name -->
              <h1 class=" aos " data-aos="fade-left" data-aos-delay="0">
                <span> <?php echo $user['name']; ?> </span>
                <span> <?php echo $user['lastname']; ?> </span>
              </h1>
              <h3 class=" aos " data-aos="fade-left" data-aos-delay="50">Сетевой инженер</h3>
            </div>
          </div>
        </div>
        <!--/profile-wrapper-->
        <div class="profile-aboutme aos aos--first" data-aos="fade-up" data-aos-delay="0">
          <!-- abouttme -->
          <div class="profile-section-header">
            <h1>
              <span>Обо мне</span>
              <span class="pfp-edit">
                <a href="?id=
																	<?php echo $user['id'] . '&editing=1'; ?>">Редактировать </a>
              </span>
            </h1>
          </div>
          <div class="profile-aboutme-desc">
            <div>
              <p> <?php echo $user['about']; ?> </p>
            </div>
            <div> <?php
           if($_GET['editing'] == 1){
            echo '
            
															<form class="form-div" action="#" method="post">
																<div class = "profile-aboutme-row">
																	<p>Возраст:</p>
																	<p>
																		<input name="age" value="'.$user["age"].'">
																		</p>
																	</div>
																	<div class = "profile-aboutme-row">
																		<p>Email:</p>
																		<p>
																			<input name="email" value="'.$user["email"].'">
																			</p>
																		</div>
																		<div class = "profile-aboutme-row">
																			<p>Телефон:</p>
																			<p>
																				<input name="phone_number" value="'.$user["phone_number"].'">
																				</p>
																			</div>
																			<div class = "profile-aboutme-row">
																				<p>Адрес:</p>
																				<p>
																					<input name="address" value="'.$user["address"].'">
																					</p>
																				</div>
																				<div class = "profile-aboutme-row">
																					<p>GPA:</p>
																					<p>
																						<input name="gpa" value="'.$user["gpa"].'">
																						</p>
																					</div>
																					<div class = "profile-aboutme-row">
																						<p>About:</p>
																						<p>
																							<input name="about" value="'.$user["about"].'">
																							</p>
																						</div>
																						<input name="id" value="'.$user["id"].'&editing=0" hidden>
																							<button name="update_user">Сохранить</button>
																						</form>
            ';
           }else{
            echo '
              
																						<div class = "profile-aboutme-row">
																							<p>Возраст:</p>
																							<p>'.$user["age"].'</p>
																						</div>
																						<div class = "profile-aboutme-row">
																							<p>Email:</p>
																							<p>'.$user["email"].'</p>
																						</div>
																						<div class = "profile-aboutme-row">
																							<p>Телефон:</p>
																							<p>'.$user["phone_number"].'</p>
																						</div>
																						<div class = "profile-aboutme-row">
																							<p>Адрес:</p>
																							<p>'.$user["address"].'</p>
																						</div>
																						<div class = "profile-aboutme-row">
																							<p>GPA:</p>
																							<p>'.$user["gpa"].'</p>
																						</div>
            
            ';
           }
            
           ?> </div>
          </div>
        </div>
        <!-- abouttme end-->
        <hr>
        <div class="profile-qualifications aos " data-aos="fade-up" data-aos-offset="200" data-aos-delay="0" data-aos-once="true">
          <!--Qulifications-->
          <div class="profile-sections-header">
            <h1>
              <span> Профессиональные навыки </span>
              <span class="pfp-edit">
                <a href="./editprofile/create_skills.php">Добавить</a>
              </span>
            </h1>
          </div>
          <div class="skill-grid"> <?php  foreach ($user_skills as $item): //$item['skill_name'] ?> 
            <div>
            <p>
              <span style=""> <?php echo $item['skill_name'] ?> </span>
              <span>
                <button type='submit' class='delete-btn-skill'><i class="fa fa-trash"></i></button>
              </span>
            </p>
          </div>
            <?php endforeach; ?> </div>
          <!--Skill grid-->
        </div>
        <!--/qualifications-->
        <hr>
        <div class="profile-timeline aos " data-aos="fade-up" data-aos-offset="200" data-aos-delay="0" data-aos-once="true">
          <!--Timeline-->
          <div class="profile-sections-header">
            <h1>
              <span>Опыт работы</span>
              <span class="pfp-edit">
                <a href="./editprofile/create_work_experience.php?user_id=
																										<?php echo $user['id'] ?>">Добавить </a>
              </span>
            </h1>
          </div>
          <div class="profile-timeline-grid"> <?php

            foreach($user_work as $item){
              
                echo 
              "
                
																							<div class='timeline-card'>
																								<form class='form-div' action='#' method='get'>
																									<h3>
																										<span>".$item['work_name']."</span>
																										<span class='timeline-company'>в компании ". $item['company_name'] . ' | ' ."</span>
																										<span>
																											<button type='submit' class='delete-btn'>
																												<i class='fa fa-trash' ></i>
																											</button>
																										</span>
																										<span>
																											<a href='./editprofile/edit_work_experience.php?id=".$item['id']."'> редактировать
																											</i>
																										</a>
																									</span>
																								</h3>
																								<p>".$item['work_starting_date']." - ". ($item['work_ending_date'] == '0000-00-00' || $item['work_ending_date'] == NULL ? ' в настоящее время' : $item['work_ending_date']) ."</p>
																								<p>". $item['work_description']."</p>
																								<div style='display: flex'>
																									<input type ='text' name = 'delete_work_id' value = '".$item['id']."' hidden>
																										<input type ='text' name = 'current_id' value = '".$user['id']."' hidden>
																										</form>
																									</div>
																								</div>
              ";
              }

          ?> </div>
        </div>
        <!--/Timeline-->
        <hr>
        <div class="profile-timeline " data-aos="fade-up" data-aos-offset="200" data-aos-delay="0" data-aos-once="true">
          <div class="profile-sections-header">
            <h1>
              <span> Образование </span>
              <span class="pfp-edit">
                <a href="./editprofile/create_education_experience.php">Добавить</a>
              </span>
            </h1>
          </div>
          <div class="profile-timeline-grid"> <?php

            foreach($user_education as $item){
              echo 
              "
                
																									<div class='timeline-card-2'>
																										<form class='form-div' action='#' method='get'>
																											<h3>
																												<span>".$item['degree']." in ". $item['major'] ."</span>
																												<span class='timeline-company'>from ". $item['university'] . ' | ' ."</span>
																												<span>
																													<button type='submit' class='delete-btn'>
																														<i class='fa fa-trash' ></i>
																													</button>
																												</span>
																												<span>
																													<a href='./editprofile/edit_education_experience.php?id=".$item['id']."'> редактировать
																													</i>
																												</a>
																											</span>
																										</h3>
																										<p>".$item['starting_year']." - ". $item['ending_year'] ."</p>
																										<p>". $item['description']."</p>
																										<div style='display: flex'>
																											<input type ='text' name = 'delete_education_id' value = '".$item['id']."' hidden>
																												<input type ='text' name = 'current_id' value = '".$user['id']."' hidden>
																												</form>
																											</div>
																										</div>


              ";
            }

          ?> </div>
        </div>
      </div>
    </div>
    </div>
    <!-- // Main Content --> <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/landing-scroll.js"></script>
  </body>
</html>