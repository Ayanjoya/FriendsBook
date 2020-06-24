
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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


<div style="border: solid 1.5px;background-color: white;height: 75%;width: 55%;position: relative;left:23%;top:5%;border-bottom: 0px;

">
	

<img src = "<?php echo $row['back_cover'];?>"style="width:100%;height: 50%;object-fit: cover;">




<?php

if ($row['user_id'] == $_SESSION['id']){



?>




<h5 style="position: relative;bottom: 5%;text-align: right;right:1%;"><a href="edit.php">Edit</a></h5>




<?php }?>

<img src="<?php echo $row['img'];?>" style = "width:23%;height: 175px;border-radius: 80%;object-fit: cover;border: solid white 5px;position: relative;position:absolute;bottom:38%;left:1%;">

<h3 style="position: relative;top:8%;left:1%;"><?= $row['name']?></h3>
<h5 style="position: relative;top:6%;left:1%;color: #565656;"><?= $row['email']?></h5>








<h5 style="position: relative;top:-3%; text-align: right; color: #565656;"><?= 'Gender: '.$row['gender']?></h5>

<h5 style="position: relative;top:-4%; text-align: right; color: #565656;"><?= 'D.O.B: '.$row['dob']?></h5>

<hr style="border: solid gray 2px;position: relative;top:-35px;">








<h5 style="padding-left:1%;position: relative; bottom:40px;" class="text-dark"><?= $row['bio']?></h5>


	

</div>


<div style="background-color: white;height: 7%;border: solid 1.5px;width: 55%;position: relative;left:23%;top:5%;">





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




<h5 style="position: relative;top:-15px;text-align: center;"><?= $row['counter'].' Following'?></h5>




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
	

html, body {
  height: 100%;
}

</style>