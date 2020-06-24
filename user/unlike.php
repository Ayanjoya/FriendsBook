<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="overflow-x: hidden;">

<?php

include 'menu.php';
include 'conn.php';
 session_start();

$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend` FROM `user_post` WHERE id = ".$_GET['creator_id']."";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);



$like1 = "DELETE FROM `user_likes` WHERE user_id = '".$_SESSION['id']."' and post_id = '".$_GET['creator_id']."'";
$run1 = mysqli_query($conn, $like1);
$data1 = mysqli_fetch_assoc($run1);

header('Location: http://localhost:8080/my_fb/user/veiw.php?creator_id='.$_GET['creator_id'].'')

?>








</div>










</body>
</html>
