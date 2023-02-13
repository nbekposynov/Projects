<header>
    <a href="<?php echo BASE_URL . '/index.php' ?>">
   
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="<?php echo BASE_URL . '/index.php' ?>">Главная</a></li>
      <li><a href="#">О нас</a></li>
      <!-- <li><a href="#">Сервисы</a></li> -->

      <?php if (isset($_SESSION['id'])): ?>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo html_entity_decode(substr($_SESSION['username'], 0, 10) . '...'); ?>
            
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul>
            <?php if($_SESSION['admin']): ?>
              <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Дэшборд</a></li>
            <?php endif; ?>
            <?php if($_SESSION['company']): ?>
              <li><a href="<?php echo BASE_URL . '/admin/company-dashboard.php' ?>">Дэшборд</a></li>
            <?php endif; ?>
            <?php if(!$_SESSION['admin'] and !$_SESSION['company']): ?>
            <li><a href="/blogphp/profile.php?id=<?php echo $_SESSION['id'];?>&editing=0">Профиль</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
        <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
      <?php endif; ?>
    </ul>
</header>
<div class="under-navbar">
<ul>
      <li><a href="<?php echo BASE_URL . '/news.php' ?>">Новости</a></li>
      <li><a href="<?php echo BASE_URL . '/diploma-topics.php'?>">Дипломные работы</a></li>
      <li><a href="enterprises.php">Предприятия</a></li>
      <!--<li><a href="universities.php">Вузы</a></li>-->
      <li><a href="rezerv.php">Кадровый резерв</a></li>
      <li><a href="<?php echo BASE_URL . '/studentam.php' ?>">Студентам</a></li>
      <ul>
        </div>