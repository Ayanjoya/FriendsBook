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



?>



<div>
	




<div style="background-image: url('<?php echo $row['media']?>');padding-top:100%;background-size: cover;object-fit: cover;width: 50%;padding-top: 53.1%">







<div style="">
	<div style="width: 50%;padding-top:0%;background-color: none;background:white;position: fixed;bottom: 0px;border: solid 2px;padding:0.3%;padding-left: 1%;">
		




<?php

$like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '".$_SESSION['id']."' and post_id = '".$_GET['creator_id']."'";
$run1 = mysqli_query($conn, $like1);
$data1 = mysqli_fetch_assoc($run1);

if($data1){


?>
<form method="post" action="http://localhost:8080/my_fb/user/unlike.php?creator_id=<?= $_GET['creator_id']?>">
		<button style="background-image: url(already_liked.png);background-size: cover;padding: 3.5%;border-radius: 80%;" name = "like"></button>


<?php
}
else{

?>

<form method="post" action="http://localhost:8080/my_fb/user/create_like.php?creator_id=<?= $_GET['creator_id']?>">
		<button style="background-image: url(like_button.png);background-size: cover;padding: 3.5%;border-radius: 80%;" name = "like"></button>


<?php }?>



		<a style="background-image: url(dowload_but.png);background-size: cover;padding: 3.5%;border-radius: 80%;position: absolute;left:20%;border:solid 2px black;"name = "dowloaad"download href="<?= $row['media']?>" ></a>




<?php


$follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '".$_SESSION['id']."'";
$run1 = mysqli_query($conn, $follow);
$data1 = mysqli_fetch_assoc($run1);



if ($data1){

?>

		<a style="background-image: url(already_follow.png);background-size: cover;padding: 3.5%;border-radius: 80%;position: absolute;left:40%;;border:solid 2px black;"name = "follow" href="http://localhost:8080/my_fb/user/unfollow.php?creator_id=<?= $_GET['creator_id']?>"></a>
<?php


}

else{


?>
		<a style="background-image: url(folloe_but.png);background-size: cover;padding: 3.5%;border-radius: 80%;position: absolute;left:40%;;border:solid 2px black;"name = "follow" href="http://localhost:8080/my_fb/user/follow.php?creator_id=<?= $_GET['creator_id']?>"></a>

<?php }?>


		<a style="background-image: url(share_but.png);background-size: cover;padding: 3.5%;border-radius: 80%;position: absolute;left:60%;;border:solid 2px black;"name = "share"></a>


		




	</div>
</div>


</form>
</form>



</div>


<div style="position: absolute;bottom:0%;left:50%;font-family: Comic Sans MS;width: 50%;height: 93.2%;overflow: scroll;overflow-x: hidden;">
	
<h2 style="padding-top: 2%;padding-left: 3%;">Creator Name: <a style="color: black;" href = 'veiw_profile.php?id=<?= $row['user_id']?>'><?= '@'.$row['name']?></a></h2>




<?php

if(!$row['friend']){

?>


<h2  style="padding-top: 4%;padding-left: 3%;">Tag Friends: None</h2>

<?php

}
else{
?>

<h2  style="padding-top: 4%;padding-left: 3%;">Tag Friends: <a href = "veiw_profile.php?id=<?= $row1['id']?>" style="color: black;"><?= '@'.$row['friend']?></a></h2>

<?php

}
?>



<h2 style="padding-top: 4%;padding-left: 3%;">Posted On: <?= substr($row['time'] , 0 , 10);?></h2>


<h2 style="padding-top: 4%;padding-left: 3%;">Description:</h2>


<div style="border:solid 1px; border-left: hidden; border-right: hidden; overflow: scroll;height: 30%;overflow-x: hidden;background-color: #F7F7F7">

<h2 style="padding-top: 2%;padding-left: 3%;"><?= $row['description']?></h2>





</div>










<div>






<h2 style="padding-left: 3%;padding-bottom: 2%;padding-top:3%;">Comments:</h2>

<form action="<?php echo $_SERVER['REQUEST_URI']?>"  enctype="multipart/form-data" id="questionnaire"method = "post">

<input type="text" name="com" placeholder = "Add A Public Comment"style="font-size: 180%; width:100%;border-left:0px;border-right:0px;border-top:0px;border-bottom-width: 3px;padding:1%;">

	<button class="btn btn-outline-primary btn-lg" style="position: absolute;left:84%;top:88%;"id="buttt">Submit</button>
</form>

<div style="padding-bottom: 5%;">
  </div>


</div>	

<?php


	$sql11 = "SELECT * FROM `comments` WHERE post_id = '".$_GET['creator_id']."' order by id desc";
	$a1 = mysqli_query($conn, $sql11);
while (	$row1 = mysqli_fetch_assoc($a1)){


	$sql111 = "SELECT * FROM `profile` WHERE id = '".$row1['user_id']."'";
	$a11 = mysqli_query($conn, $sql111);	
	$row11 = mysqli_fetch_assoc($a11)
?>



<div class="media" style="padding-left: 2%;padding-top: 3%; border-bottom:solid #d3d3d3;padding-bottom: 3%;">
 <a style="color:black;"  href = 'veiw_profile.php?id=<?= $row11['id']?>'><img src="<?= $row11['img']?>" style = "object-fit:cover;border-radius:80%;height: 64px; width: 64px;"class="mr-3" alt="..."></a>
  <div class="media-body">
    <h5 class="mt-0"><a style="color:black;"  href = 'veiw_profile.php?id=<?= $row11['id']?>'><?= "@".$row11['name']?></a></h5>
    <?php

    echo $row1['comment'];

    ?>
</div>
</div>

<?php
}




?>






</div>

</div>


</div>

<div style="visibility: hidden;display: none;">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {




	if($_REQUEST['com']){


	$sql11 = "INSERT INTO `comments`(`user_id`, `post_id`, `creator_id`, `comment`) VALUES ('".$_SESSION['my_id']."' , '".$row['id']."' , '".$row['user_id']."' , '".$_REQUEST['com']."')";
	$a1 = mysqli_query($conn, $sql11);
	$row1 = mysqli_fetch_assoc($a1);

$like = "INSERT INTO `notify`(`user_id`, `creator_id`, `title`, `icon`, `text`) VALUES ('".$_SESSION['id']."' , '".$row['user_id']."' , 'Commented On Your Post' , '".$row1['img']."' , '@".$row1['name']."')";
$run = mysqli_query($conn, $like);
$data = mysqli_fetch_assoc($run);


	echo'<script type="text/javascript">';
	echo'window.location.href = "http://localhost:8080/my_fb/user/veiw.php?creator_id='.$_GET['creator_id'].'";';

	echo'</script>';

}


}


?>











</div>










</body>
</html>
