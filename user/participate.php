<h2 style="display: none;">
<?php
session_start();
include 'conn.php';
$id = $_GET['id'];

$sql11 = "INSERT INTO `participate`(`user_id`, `event_id`) VALUES ('".$_SESSION['id']."' , '".$id."')";
    $a1 = mysqli_query($conn, $sql11);
    $row1 = mysqli_fetch_assoc($a1);



?>
</h2>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  include'menu.php';?>

<div class="jumbotron alert-success" style="margin:10%;">
  <h1 class="display-4">Success!</h1>
  <p class="lead">Your details have been regesterd succesfully thank you for participating.</p>
  <hr class="my-4">
  <p>we will delever your prices if you win in this event.</p>
  <a class="btn bg-dark btn-lg text-white" href="home.php" role="button">Back Home</a>
</div>


</body>
</html>