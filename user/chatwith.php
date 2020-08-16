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

$sql11 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$_GET['creator_id']."'";
$a1 = mysqli_query($conn, $sql11);

$row1 = mysqli_fetch_assoc($a1)

?>

<div style="padding:1%;background-color:white;border-bottom:solid 1px lightgray;">
	
	<div class="media">
  <img src="<?php echo $row1['img']?>" class="mr-3" alt="..." style="width:66px;height:66px;border-radius: 100%;">
  <div class="media-body">
    <h5 class="mt-2"><?php echo $row1['name']?></h5>
<?php echo $row1['bio']?>
  </div>
</div>

</div>










<div>
	

<?php

$sql1 = "SELECT `id`, `user_id`, `creator_id`, `messege` FROM `chat` WHERE user_id = '".$_SESSION['id']."' and creator_id = '".$_GET['creator_id']."'";
$a = mysqli_query($conn, $sql1);

while($row = mysqli_fetch_assoc($a)){


$sql11 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$row['user_id']."'";
$a1 = mysqli_query($conn, $sql11);

$row1 = mysqli_fetch_assoc($a1);

if($row1['user_id'] == $_SESSION['id']){

?>

<div class="container">
  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
  <p>Hello. How are you today?</p>

</div>


<?php 

?>

<?php
}
else{
?>





<div class="container">
  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;" class="ml-auto">
  <p>Hello. How are  today?</p>

</div>
fsf





<?php }}?>


</div>








<style type="text/css">
	.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

</style>

</body>
</html>