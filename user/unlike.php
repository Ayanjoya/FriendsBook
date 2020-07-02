<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="overflow-x: hidden;">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
 session_start();

include 'menu.php';
include 'conn.php';

$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend` FROM `user_post` WHERE id = ".$_GET['creator_id']."";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);



$like1 = "DELETE FROM `user_likes` WHERE user_id = '".$_SESSION['id']."' and post_id = '".$_GET['creator_id']."'";
$run1 = mysqli_query($conn, $like1);
$data1 = mysqli_fetch_assoc($run1);

echo '<script type="text/javascript">';

echo 'window.location.href = "'. "http://205.147.99.187/FriendsBook/user/veiw.php?creator_id=".$_GET['creator_id']."".'";';

echo '</script>';

?>








</div>










</body>
</html>
