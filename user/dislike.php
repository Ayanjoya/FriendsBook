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


$like1 = "INSERT INTO `user_dis_likes`(`user_id`, `creator_id`, `post_id`) VALUES ('".$_SESSION['id']."' , '".$row['user_id']."' , '".$_GET['creator_id']."')";
$run = mysqli_query($conn, $like1);
$data = mysqli_fetch_assoc($run);


$like = "DELETE FROM `user_likes` WHERE user_id = '".$_SESSION['id']."'";
$run = mysqli_query($conn, $like);
$data = mysqli_fetch_assoc($run);




$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend` FROM `user_post` WHERE id = ".$_GET['creator_id']."";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);



$like = "INSERT INTO `notify`(`user_id`, `creator_id`, `title`, `icon`, `text`) VALUES ('".$_SESSION['id']."' , '".$row['user_id']."' , 'Dislike Your Post' , '".$row1['img']."' , '@".$row1['name']."')";
$run = mysqli_query($conn, $like);
$data = mysqli_fetch_assoc($run);


echo '<script type="text/javascript">';

echo 'window.location.href = "'. "http://localhost:8080/my_fb/user/veiw.php?creator_id=".$_GET['creator_id']."".'";';

echo '</script>';


?>







</div>










</body>
</html>