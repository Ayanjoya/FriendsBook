<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="overflow-x: hidden; visibility: hidden;">

<?php
 session_start();

include 'menu.php';
include 'conn.php';

$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend` FROM `user_post` WHERE id = ".$_GET['creator_id']."";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);



$sql11 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
$a1 = mysqli_query($conn, $sql11);
$row1 = mysqli_fetch_assoc($a1);






$like = "INSERT INTO `user_likes`(`user_id`, `creator_id`, `post_id`) VALUES ('".$_SESSION['id']."' , '".$row['user_id']."' , '".$_GET['creator_id']."')";
$run = mysqli_query($conn, $like);
$data = mysqli_fetch_assoc($run);



$like = "INSERT INTO `notify`(`user_id`, `creator_id`, `title`, `icon`, `text`) VALUES ('".$_SESSION['id']."' , '".$row['user_id']."' , 'Liked Your Post' , '".$row1['img']."' , '@".$row1['name']."')";
$run = mysqli_query($conn, $like);
$data = mysqli_fetch_assoc($run);




echo '<script type="text/javascript">';

echo 'window.location.href = "'. "http://205.147.99.187/FriendsBook/user/veiw.php?creator_id=".$_GET['creator_id']."".'";';

echo '</script>';

?>







</div>










</body>
</html>
