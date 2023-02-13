<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        	<!-- AOS -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/auth.css">

  <title>Register</title>
</head>

<body>
  
  
<!--<?php include(ROOT_PATH . "/app/includes/header.php"); ?>-->

  <div class="auth-content class="auth-content aos aos--first " data-aos="zoom-in" data-aos-offset="300" data-aos-delay="0">

    <form action="register.php" method="post">

    <div class=" aos aos--first" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="50"> <img src="assets\images\logo.png" class="logo-img "> </div>

      <h2 >Регистрация</h2>

      <br>

      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

      <div class="auth-input-holder">
        <label>Имя пользователя</label>
        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input" autocomplete="off">
      </div>
      <div class="auth-input-holder">
        <label>Имя</label>
        <input type="text" name="name" value="<?php echo $name; ?>" class="text-input" autocomplete="off">
      </div>
      <div class="auth-input-holder">
        <label>Фамилия</label>
        <input type="text" name="lastname" value="<?php echo $lastname; ?>" class="text-input" autocomplete="off">
      </div>
      <div class="auth-input-holder">
        <label>Электронная почта</label>
        <input type="email" name="email"  value="<?php echo $email; ?>" class="text-input" autocomplete="off">
      </div>
      <div class="auth-input-holder">
        <label>Пароль</label>
        <input type="password" name="password"  value="<?php echo $password; ?>" class="text-input" autocomplete="off">
      </div>
      <div class="auth-input-holder">
        <label>Повторите пароль</label>
        <input type="password" name="passwordConf"  value="<?php echo $passwordConf; ?>" class="text-input" autocomplete="off">
      </div>
      <div >
        <button type="submit" name="register-btn" class="btn btn-big">Регистрация</button>
      </div>
      <p>Уже есть аккаунт? <a href="<?php echo BASE_URL . '/login.php' ?>">Войти</a></p>
    </form>

  </div>

  


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/landing-scroll.js"></script>

</body>

</html>