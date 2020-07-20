
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

	$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `dob`, `bio` ,`address`, `img` ,`back_cover`FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);



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



<h5 style="padding-left:1%;padding-top:1%;" class="text-dark">Do You Know <?PHP echo $row['name'].'?';?></h5>
<a class="btn btn-danger" style="height:10%; margin-left:auto;margin-top:auto;margin-bottom:auto;" href="edit.php">Edit</a>
</div>
	

</div>


<div style="background-color: white;height: 7%;border: solid 1.5px;width: 100%;position: relative;left:0%;top:24.5%;border-right: 0px;border-left: 0px;">





<?php



	$sql1 = "SELECT count(*) as counter FROM `follow` WHERE creator_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);



?>



<h5 style="position: relative;top:15px; left:1%;text-align: left;"><?= $row['counter'].' Followers'?></h5>






<?php



	$sql1 = "SELECT count(*) as counter FROM `follow` WHERE user_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);



?>




<h5 style="position: relative;top:-15px; left:1%;text-align: center;"><?= $row['counter'].' Following'?></h5>




<?php



	$sql1 = "SELECT count(*) as counter FROM `user_likes` WHERE creator_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);



?>

<h5 style="position: relative;top:-47px;text-align: right;padding-right: 1%;"><?= $row['counter'].' Likes'?></h5>



</div>



















</body>
</html>
<style type="text/css">
	

.img{
	width:170px;height: 170px;border-radius: 80%;object-fit: cover;border: solid white 5px;position: relative;position:absolute;bottom:17%;left:1%;
}	

@media only screen and (max-width: 492px) {
	.img{
	width:140px;height: 140px;border-radius: 80%;object-fit: cover;border: solid white 5px;position: relative;position:absolute;bottom:17%;left:1%;
}
}

html, body {
  height: 100%;
}

</style>