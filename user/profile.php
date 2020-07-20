
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="overflow-x: hidden;background:#E8E8E8;">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">

<?php
			session_start();

include 'menu.php';


include 'conn.php';

	$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `dob`, `bio` ,`address`, `img` ,`back_cover` , 'phone' FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);

	$sql111 = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned` FROM `userdata` WHERE id = '".$_SESSION['id']."'";
	$a11 = mysqli_query($conn, $sql111);
	$row11 = mysqli_fetch_assoc($a11);



?>


<div style="border: solid 0px;background-color: white;height: 60%;width: 100%;position: relative;left:0;top:0%;

">
	

<img src = "<?php echo $row['back_cover'];?>"style="width:100%;height: 70%;object-fit: cover;">




<?php

if ($row['user_id'] == $_SESSION['id']){



?>




<h5 style="position: relative;bottom: 8%;text-align: right;right:1%;"><a href="edit.php">Edit</a></h5>




<?php }?>

<img src="<?php echo $row['img'];?>" class="img">

<h3 style="position: relative;top:5%;left:1%;"><?= $row['name']?></h3>
<h5 style="position: relative;top:2.5%;left:1%;color: #565656;"><?= $row['email']?></h5>

</div>













<div style="height:auto;padding-top:0.1%;padding-bottom:0.1%;position: relative;bottom: -10px;background-color: white; display:flex;">



<h5 style="margin-left:1%;margin-top:1%; margin-bottom:1%; " class="text-dark">Do You Know <?PHP echo $row['name'].'?';?></h5>
<a class="btn btn-danger" style="height:10%; margin-left:auto;margin-top:auto;margin-bottom:auto;" href="edit.php">Edit</a>
</div>
	


<div class="tog">
<div class = "about">



<h5 style="margin-left:1%;margin-top:1%; margin-bottom:1%; " class="text-dark">About</h5>

<h6 style="margin-left:2%;margin-top:2%; margin-bottom:1%; " class="text-dark"><?php echo "Name: ".$row['name'];?></h6>

<h6 style="margin-left:2%;margin-top:2%; margin-bottom:1%; " class="text-dark"><?php echo "born on: ".$row['dob'];?></h6>

<h6 style="margin-left:2%;margin-top:2%; margin-bottom:1%; " class="text-dark"><?php echo "gender: ".$row['gender'];?></h6>

<h6 style="margin-left:2%;margin-top:2%; margin-bottom:1%; " class="text-dark"><?php echo "Address: ".$row['address'];?></h6>

<h6 style="margin-left:2%;margin-top:2%; margin-bottom:1%; " class="text-dark"><?php echo "Phone No: ".$row11['phone'];?></h6>

<!-- <h6 style="margin-left:2%;margin-top:2%; margin-bottom:1%; " class="text-dark"><?php echo "Status: ".$row['bio'];?></h6> -->

<?php



	$sql1 = "SELECT count(*) as counter FROM `follow` WHERE user_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);



?>




<h6 style="margin-left:2%;margin-top:2%; margin-bottom:1%; "><?= 'Followers: '.$row['counter']?></h5>


<?php



	$sql1 = "SELECT count(*) as counter FROM `follow` WHERE creator_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);



?>



<h6 style="margin-left:2%;margin-top:2%; margin-bottom:1%; "><?= 'Following: '.$row['counter']?></h5>



<?php



	$sql1 = "SELECT count(*) as counter FROM `user_likes` WHERE creator_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);



?>

<h6 style="margin-left:2%;margin-top:2%; margin-bottom:1%; "><?= 'Likes: '.$row['counter']?></h6>

</div>














<?php 	$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `dob`, `bio` ,`address`, `img` ,`back_cover` , 'phone' FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);?>

<div class = "post">


<h5><?php echo $row['bio'];?></h5>


</div>





</div>


</div>




</div>




















</body>
</html>
<style type="text/css">
	

.img{
	width:170px;height: 170px;border-radius: 80%;object-fit: cover;border: solid white 5px;position: relative;position:absolute;bottom:17%;left:1%;
}	

.tog{
	display: flex;
}


.about{
	height:auto;padding-top:0.1%;padding-bottom:0.1%;position: relative;bottom: -27px;background-color: white; width:250px; height:auto; margin-left:2%; padding:1%;
}


.post{
	height:auto;padding-top:0.1%;padding-bottom:0.1%;position: relative;bottom: -27px;background-color: white; width:60%; height:auto; margin:; padding:1%;left:2%;
}

@media only screen and (max-width: 492px) {
	.img{
	width:140px;height: 140px;border-radius: 80%;object-fit: cover;border: solid white 5px;position: relative;position:absolute;bottom:17%;left:1%;
}
.about{
	height:auto;padding-top:0.1%;padding-bottom:0.1%;position: relative;bottom: -27px;background-color: white; width:300px; height:auto; margin:auto; padding:1%;
}

.post{
	height:1000px;padding-top:0.1%;padding-bottom:0.1%;position: relative;bottom: -40px;background-color: white; width:100%; height:auto; margin:; padding:1%;left:0%;
}

.tog{
	display: block;
}


}

html, body {
  height: 100%;
}

</style>