<?php 
include("path.php");

header('Location: '. BASE_URL . '/diploma-topics.php');
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blog';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
$user_id=$_POST['user_id'];
$user_name=$_POST['user_name'];
$user_lastname=$_POST['user_lastname'];
$status="На рассмотрении";
$apply_by = $user_name . ' ' . $user_lastname;
$user_diploma=$_POST['user_diploma'];
$user_diploma_id=$_POST['user_diploma_id'];
$user_cname=$_POST['user_cname'];

$query="INSERT INTO applied_requests (id,user,apply_by,diploma_name,diploma_id,cname,status) VALUES ('','$user_id','$apply_by','$user_diploma','$user_diploma_id','$user_cname','$status')";

$res=mysqli_query($conn,$query);


?>


<?php echo $_POST['user_name']?>
<?php echo $_POST['user_lastname']?>

<?php echo $apply_by?>
