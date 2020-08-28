<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php include'menu.php';include'conn.php';include'config.php';?>
<body>

<div style="padding:2%;">

<?php
$today_ = date("Y-m-d");


    $sql11 = "SELECT `id`, `icon`, `title`, `text`, `more`, `rule`, `price`, `winning`, `till-text`, `till-time` , `delete_on` FROM `event` order by id desc";
    $a1 = mysqli_query($conn, $sql11);
    while ($row1 = mysqli_fetch_assoc($a1)) {

?>

<div style="display: none;">
<?php if($row1['delete_on'] == $today_){
	
	$sql111 = "DELETE FROM `event` WHERE id = '".$row1['id']."'";
    $a11 = mysqli_query($conn, $sql111);
    $row11 = mysqli_fetch_assoc($a11);
}?>

</div>

<a href="veiw_event.php?id=<?php echo $row1['id']?>" style="color: black;    text-decoration: none;">
<div class="media" style="border-bottom: solid 0.1px lightgray; padding:1%;">
  <img src="https://image.flaticon.com/icons/svg/42/42446.svg" class="mr-3" alt="Icon" style="width:30px; height: 30px;">
  <div class="media-body">
    <h5 class="mt-0"><?php echo $row1['title'];?></h5>
<?php echo $row1['text'];?>
  </div>
</div>
</a>

<?php }?>

</div>


</body>
</html>