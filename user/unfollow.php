<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title></title>
</head>
<body style="overflow-x: hidden;">

<?php
 session_start();

include 'menu.php';
include 'conn.php';

//query for feching data by creator id
$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend` FROM `user_post` WHERE id = ".$_GET['creator_id']."";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);




//query for feching data for inserting the data of notify

$sql11 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
$a1 = mysqli_query($conn, $sql11);
$row1 = mysqli_fetch_assoc($a1);


//query for inserting into notify

$like = "INSERT INTO `notify`(`user_id`, `creator_id`, `title`, `icon`, `text`) VALUES ('".$_SESSION['id']."' , '".$row['user_id']."' , 'Unfollowing You' , '".$row1['img']."' , '@".$row1['name']."')";
$run = mysqli_query($conn, $like);
$data = mysqli_fetch_assoc($run);




//Delete from likes

$like1 = "DELETE FROM `follow` WHERE user_id = '".$_SESSION['id']."' AND creator_id='".$row['user_id']."'";
$run1 = mysqli_query($conn, $like1);
$data1 = mysqli_fetch_assoc($run1);



echo '<script type="text/javascript">';


echo 'window.location.href = "home.php?"';

echo '</script>';




?>







</div>










</body>
</html>
