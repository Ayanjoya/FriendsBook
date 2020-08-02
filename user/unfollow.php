<div style="display: none;">
<?php
session_start();
include 'conn.php';


//for profile of follow
$media = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `url`, `color`, `background`, `time`, `friend` FROM `user_post` WHERE id = '".$_GET['creator_id']."'";
$run1 = mysqli_query($conn, $media);
$data1 = mysqli_fetch_assoc($run1);

$pro = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$data1['user_id']."'";
$run2 = mysqli_query($conn, $pro);
$data2 = mysqli_fetch_assoc($run2);


//for notify
$not = "INSERT INTO `notify`(`user_id`, `creator_id`, `title`, `icon`, `text`) VALUES ('".$_SESSION['id']."' , '".$data2['user_id']."' , 'Started UnFollowing You' , '".$data2['img']."' , '".$_SESSION['name']."')";
$run3 = mysqli_query($conn, $not);
$data3 = mysqli_fetch_assoc($run3);


//for follow
$fol = "DELETE FROM `follow` WHERE user_id = '".$_SESSION['id']."' AND creator_id = '".$data2['user_id']."'";
$run4 = mysqli_query($conn, $fol);
$data4 = mysqli_fetch_assoc($run4);

header('Location: home.php');

?>

</div>