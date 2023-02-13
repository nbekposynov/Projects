<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/diplomas.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/diplomas_dashboard.php"); ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
          rel="stylesheet">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/main-pages/diploma.css">
    <title>Секция Предприятия - Дэшборд
    </title>
  </head>

  <body>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>


    
    <!-- Main Content Wrapper -->
    <div class="main-content-wrapper">
      <!-- Admin Content -->
      <div class="admin-content">
        <div class="content">
          <br>
          <center> 
            <h2 class="page-title">Дэшборд
            </h2> 
          </center>
          <br>
          <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>
          <table class="diploma-table">
            
            <thead>
              <tr>
                <th>
                  <p>№
                  </p>
              </td>
              <th>
                <p>Тема
                </p>
              </td>
            <th>
              <p>От кого
              </p>
            </td>
          <th>
            <p>Дата
            </p>
          </td>
          <th>
            <p>Статус
            </p>
          </td>
        <th>
          <p>Действие
          </p>
        </td>
      </tr>
    </thead>
    <?php 
$i=1;
$query="Select * FROM applied_requests WHERE cname = '" . $_SESSION[ "cname" ] . "'";
$res=mysqli_query($conn, $query);
$count=mysqli_num_rows($res);
if($count>0)
{
while($row=mysqli_fetch_array($res))
{
?>
  <tbody>
    <tr>
      <td>
        <?php echo $i; ?>
      </td>
      <td>
        <a href="/blogphp/singlediploma.php?id=<?php echo $row['diploma_id']; ?>">
          <?php echo $row['diploma_name']?>
        </a>
      </td>
      <td>
        <a href="/blogphp/profile.php?id=<?php echo $row['user'];?>&editing=0">
          <?php echo $row['apply_by']?>
        </a>
      </td>
      <td>
        <?php echo $row['date']?>
      </td>
      <td>
        <?php echo $row['status']?>
      </td>
      <td>
      <form method="post" action="" >
      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <button type="submit" name="approved" class="approved">Подтвердить
        </button>	
        <button type="submit" name="rejected" class="rejected">Отказать
        </button>
</form>
      </td>
    </tr>
  </tbody>
  <?php $i++;}}else{
echo "No record Found!";
} ?>
  </table>
</div>
</div>
<!-- // Admin Content -->
</div>
<!-- // Page Wrapper -->
<!-- JQuery -->
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<!-- Ckeditor -->
<script
        src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js">
</script>
<!-- Custom Script -->
<script src="../assets/js/scripts.js">
</script>
</body>
</html>