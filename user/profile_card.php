<div class="sug2 m-auto">




<?php


include 'conn.php';

$sql1 = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned`, `school`, `class`, `sec` FROM `userdata` WHERE id = '" . $_SESSION['id'] . "'";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);


$sql11 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id='".$_SESSION['id']."'";
$a1 = mysqli_query($conn, $sql11);
$row1 = mysqli_fetch_assoc($a1);

?>

<div style="width:100%; height:100%; margin: auto; overflow: auto">
<img src="<?php echo $row1['img']?>" style = "width:100%; height:250px;border-radius:10px;object-fit:cover;position: relative; right:auto;">


<h5 style="position: relative;bottom:-1.5%;font-size: 20px; font-style: bold;"><?php echo $row1['name']?></h5>
<h6 style="position: relative;bottom:0.5%;bottom:-0.4%;font-size: 14px;"><?php echo $row1['email']?></h6>

<hr style="border:solid 1px lightgray; border-bottom:0px;">

<h6 style="position: relative;bottom:0.5%;"><?php echo $row1['bio']?></h6>

<hr style="border:solid 1px lightgray; border-bottom:0px;">

<h6 style="position: relative;bottom:0.5%;"><?php echo 'D.O.B: '.$row1['dob']?></h6>
<h6 style="position: relative;bottom:0.5%;"><?php echo 'Gender: '.$row1['gender']?></h6>
<h6 style="position: relative;bottom:0.5%;"><?php echo 'Address: '.$row1['address']?></h6>
<h6 style="position: relative;bottom:0.5%;"><?php echo 'Phone No: '.$row['phone']?></h6>
<h6 style="position: relative;bottom:0.5%;"><?php echo 'Class: '.$row['class']?></h6>
<h6 style="position: relative;bottom:0.5%;"><?php echo 'Section: '.$row['sec']?></h6>
<h6 style="position: relative;bottom:0.5%;"><?php echo 'School: '.$row['school']?></h6>



<?php



  $sql1 = "SELECT count(*) as counter FROM `follow` WHERE user_id = '".$_SESSION['id']."'";
  $a = mysqli_query($conn, $sql1);
  $row = mysqli_fetch_assoc($a);



?>




<h6 style="position: relative;bottom:0.5%;"><?= 'Followers: '.$row['counter']?></h6>










<?php


  $sql1 = "SELECT count(*) as counter FROM `follow` WHERE creator_id = '".$_SESSION['id']."'";
  $a = mysqli_query($conn, $sql1);
  $row = mysqli_fetch_assoc($a);



?>




<h6 style="position: relative;bottom:0.5%;"><?= 'Following: '.$row['counter']?></h6>












<?php



  $sql1 = "SELECT count(*) as counter FROM `user_likes` WHERE creator_id = '".$_SESSION['id']."'";
  $a = mysqli_query($conn, $sql1);
  $row = mysqli_fetch_assoc($a);



?>




<h6 style="position: relative;bottom:0.5%;"><?= 'Likes: '.$row['counter']?></h6>







</div>

<style type="text/css">
	
.sug2{
	position: fixed;
	background: white;
	padding:0.5%;	
	height: 700px;
	width:23%;
	left:1.5%;
	border:solid 1px lightgray;
	overflow: auto;
}

h6{
  font-size: 15px;
}


.media:hover{
  box-shadow: 0px 1px gray;
}



</style>