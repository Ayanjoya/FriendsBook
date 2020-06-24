<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
<?php

include 'menu.php';
include 'conn.php';

$sql11 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `follow` WHERE user_id = '".$_SESSION['id']."'order by id desc";
$a1 = mysqli_query($conn, $sql11);



$sql111 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$_SESSION['id']."'order by id desc";
$a11 = mysqli_query($conn, $sql111);
$row1 = mysqli_fetch_assoc($a11)

?>


<div class="row row-cols-0 row-cols-md-3" style="padding-left: 10%;">

<?php
while ($row = mysqli_fetch_assoc($a1)) {



?>


<div style="padding-top: 5%;">


<div class="card" style="width: 18rem;">
  <img src="<?= $row1['img']?>" class="card-img-top" alt="..." style = "height: 18rem;object-fit: cover">
  <div class="card-body">
    <h5 class="card-title"><?= '@'.$row1['name']?></h5>
    <p class="card-text"><?= substr($row1['bio'],0 , 77).'...'?>.</p>
    <a href="#" class="btn btn-primary btn-small" style="font-family: Comic Sans MS;">View</a>




<?php


$follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '".$_SESSION['id']."'";
$run1 = mysqli_query($conn, $follow);
$data1 = mysqli_fetch_assoc($run1);








if ($data1){

?>

    <a class="btn btn-outline-secondary btn-small" style="font-family: Comic Sans MS;" href="<?= 'Unfollow_enroll.php?creator_id='.$row1['user_id']?>">Unfollow</a>

<?php


}

else{


?>
		    <a href="<?= 'follow_enrol.php?creator_id='.$row1['user_id']?>" class="btn btn-outline-secondary btn-small" style="font-family: Comic Sans MS;">Follow</a>


<?php }?>


















  </div>
</div>	


</div>
	
<?php
}

?>


</body>
</html>