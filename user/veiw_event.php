<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title></title>
<?php include'menu.php';include'conn.php';include'config.php';?>

</head>

<?php 

$today_ = date("Y-m-d");

$sql11 = "SELECT `id`, `icon`, `title`, `text`, `more`, `rule`, `price`, `winning`, `till-text` , `till-time` , `delete_on` FROM `event` WHERE id = '".$_GET['id']."'";
    $a1 = mysqli_query($conn, $sql11);
    $row1 = mysqli_fetch_assoc($a1);
    ?>

<body>
<?php if($row1['till-time'] != $today_){?>

<h3 style="text-align: center; margin-top:30px;" >Welcome To Social Events</h3>
<h4 style="text-align: center; margin-top:-10px;"class="text-dark"><?php echo$row1['title'];?></h4>



<hr style="width: 80%;">

<div style="padding: 18px; width:100%;">

<h4>Instructions</h4>
<h6>

<?php echo $row1['more'];?>


</h6>

<h4 style="margin-top: 30px;">Rules</h4>
<h6>

<?php echo $row1['rule'];?>


</h6>

<h4 style="margin-top: 30px;">How To Win</h4>
<h6>

<?php echo $row1['winning'];?>


</h6>


<h4 style="margin-top: 30px;">Prices</h4>
<h6>

<?php echo $row1['price'];?>


</h6>

<h4 style="margin-top: 30px;">Winner Anouncement On</h4>
<h6>

<?php echo $row1['till-text'];?>



</h6>


<h4 style="margin-top: 30px;">How To Participate?</h4>
<h6>

1. Click on the button given below<br>
<br>

2. On winner anouncement day winner will anounce on This page<br>
<br>

3. If you win we will call you or email for your price<br>
<br>

4. we will delever your price on your street address

</h6>

<?php

$sql1111111 = "SELECT `id`, `user_id`, `event_id` FROM `participate` WHERE user_id = '".$_SESSION['id']."' AND event_id = '".$_GET['id']."'";
    $a111111 = mysqli_query($conn, $sql1111111);
	$row111111 = mysqli_fetch_assoc($a111111);
if ($row111111 == 0){
	

?>
<a href="participate.php?id=<?php echo$_GET['id']?>" class="btn btn-success mt-3">Participate</a>

<?php } else{?>


<a class="btn btn-success disabled mt-3"aria-disabled="true">Already Participated</a>



<?php }?>


</div>

<?php }else{ ?>






<div style="padding:15px;">
	

<h4 style="text-align:center;margin-top:10px;">The Winner of <?php echo $row1['title'];?> event are</h4>


<?php 


$sql11111 = "SELECT `id`, `event_id`, `user_id` FROM `event_winner` WHERE event_id = '".$_GET['id']."'";
    $a1111 = mysqli_query($conn, $sql11111);
    while($row1111 = mysqli_fetch_assoc($a1111)){

$sql111111 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$row1111['user_id']."'";
    $a11111 = mysqli_query($conn, $sql111111);
	$row11111 = mysqli_fetch_assoc($a11111);
?>

<a href="veiw_profile.php?id=<?php echo $row11111['user_id']?>" style="color: black;    text-decoration: none;">
<div class="media" style="border-bottom: solid 1px lightgray; padding:30px;">
  <img src="<?php echo $row11111['img']?>" class="mr-3" alt="..." style = "width:55px; height: 55px; border-radius: 100%;">
  <div class="media-body">
    <h5 class="mt-0"><?php echo $row11111['name'];?></h5>
    <?php echo $row11111['bio'];?>
  </div>
</div>
</a>



<?php } ?>

</div>






<?php } ?>


</body>
</html>