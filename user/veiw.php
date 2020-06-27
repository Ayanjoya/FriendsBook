























<!DOCTYPE html>
<html>
<head>

	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


<script type="text/javascript">
	
function fun() {

	let more = document.getElementById("more");
	let rmore = document.getElementById("rmore");
	let rless = document.getElementById("rless");

	if(rless.style.display == "none" )
	more.style.display = "inline";
	rmore.style.display = "none";
	rless.style.display = "inline";


}


function fun2() {

	let more = document.getElementById("more");
	let rmore = document.getElementById("rmore");
	let rless = document.getElementById("rless");

	if(rless.style.display != "none" )
	more.style.display = "none";
	rmore.style.display = "inline";
	rless.style.display = "none";


}
</script>

<?php
 session_start();


include 'menu.php';
include 'conn.php';

$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend` , `url`FROM `user_post` WHERE id = ".$_GET['creator_id']."";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);



?>

<?php


if($row['color'] == '' and $row['url'] == '' and $row['media2'] == ''){

?>





<div class="h-100 w-100 img2" style="background-image: url(<?php echo $row['media']?>);background-size: cover;background-position: center;border-bottom: solid;">



<div style="position: relative;top:91%;">

<?php

$like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '".$_SESSION['id']."' and post_id = '".$_GET['creator_id']."'";
$run1 = mysqli_query($conn, $like1);
$data1 = mysqli_fetch_assoc($run1);

if($data1){
?>


<form method="post" action='action="http://205.147.99.187/FriendsBook/user/unlike.php?creator_id=<?= $_GET['creator_id']?>'>
	

<button class = "btn"style="background-image: url(already_liked.png);padding: 3%;background-size: cover;border-radius: 80%;position: absolute;bottom: -55px;"></button>


</form>
<?php } else{?>

<form method="post" action='action="http://205.147.99.187/FriendsBook/user/unlike.php?creator_id=<?= $_GET['creator_id']?>'>
	

<button style="background-image: url(like_button.png);padding: 3%;background-size: cover;border-radius: 80%;position: absolute;bottom: -55px;"></button>


</form>

<?php }?>











<?php
$userdata = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned` FROM `userdata` WHERE name = '".$row['name']."'";
$run11 = mysqli_query($conn, $userdata);
$data11 = mysqli_fetch_assoc($run11);



$follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '".$_SESSION['id']."' and creator_id = '".$data11['id']."'";
$run1 = mysqli_query($conn, $follow);
$data1 = mysqli_fetch_assoc($run1);





if ($data1){

?>

<form method="post" action="http://205.147.99.187/FriendsBook/user/unfollow.php?creator_id=<?= $_GET['creator_id']?>">
	
<button style="background-image: url(already_follow.png);padding: 3%;background-size: cover;border-radius: 80%;position: absolute;bottom: -55px; left:10%;"></button>

</form>


<?php }
else{

?>







<form method="post" action="http://205.147.99.187/FriendsBook/user/follow.php?creator_id=<?= $_GET['creator_id']?>">
	
<button style="background-image: url(folloe_but.png);padding: 3%;background-size: cover;border-radius: 80%;position: absolute;bottom: -55px; left:10%;"></button>



</form>

<?php }?>

<form method="post">
	
<a download href="<?= $row['media']?>" style="background-image: url(dowload_but.png);padding: 3%;background-size: cover;border-radius: 80%;position: absolute;bottom: -55px; left:20%;border: solid black 2px;"></a>
</form>


</div>



</div>
<?php $sql1 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend` , `url`FROM `user_post` WHERE id = ".$_GET['creator_id']."";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);?>

<div class="pt-4 pl-3">


<a style = "color:black;"href = 'veiw_profile.php?id=<?= $row['user_id']?>'><h3><?= '@'.$row['name']?></h3></a>

<div class="pt-4">

<h5>Friends: <?php 


if ($row['friend'] == '') {
	echo "None";
}
else{
echo $row['friend'];
}



?></h5>	

<h5>Description:</h5>
<div style="width: 60%;">
	<div class="desc">
<h5><?php echo substr($row['description'],0,100)?></h5>
<h5 id = "more" style="display: none;"><?php echo substr($row['description'],100,10000)?></h5>

<a onclick="fun()" id="rmore">Read More...</a>
<a onclick="fun2()" id="rless" style="display: none;">Read Less...</a>

	</div>
</div>




</div>

<h5 class = "pt-3">Posted On: <?php echo substr($row['time'],0,10);?></h5>


<h2 style="padding-left: 0%;padding-bottom: 0%;padding-top:1%;">Comments:</h2>

<form action="<?php echo $_SERVER['REQUEST_URI']?>"  enctype="multipart/form-data" id="questionnaire"method = "post">

<input type="text" name="com" placeholder = "Add A Public Comment"style="font-size: 180%; width:100%;border-left:0px;border-right:0px;border-top:0px;border-bottom-width: 3px;padding:1%;">

	<button class="btn btn-outline-primary btn-lg" style="position: relative;left:1300px;top:10px;"id="buttt">Submit</button>
</form>

















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
</div></div>


<?php }?>









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
	echo'window.location.href = "http://205.147.99.187/FriendsBook/user/veiw.php?creator_id='.$_GET['creator_id'].'";';

	echo'</script>';

}





?>

</div>

</div>







<?php }?>


<?php }?>







<style type="text/css">
	html,body{
		height: 100%;
	}
</style>
</body>
</html>
