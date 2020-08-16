<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<?php

include 'conn.php';
include 'menu.php';

?>
</head>
<body>
<?php


$sql1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `follow` WHERE user_id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);

while($row = mysqli_fetch_assoc($a)){


$sql11 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$row['user_id']."'";
$a1 = mysqli_query($conn, $sql11);

$row1 = mysqli_fetch_assoc($a1)

?>



<div style="padding:2%;">


<a href='chatwith.php?creator_id=<?=$row1['user_id']?>'>
<div class="media" style="border-bottom:solid 2px lightgray; padding:1%;color:black;">
  <img src="<?php echo $row1['img']?>" class="mr-3" alt="..." style="width:66px;height:66px;border-radius: 100%;">
  <div class="media-body">
    <h5 class="mt-0"><?php echo $row1['name']?></h5>
<?php echo $row1['bio']?>
  </div>
</div>
</a>
</div>


<?php
}
?>

</body>
</html>