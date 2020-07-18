<!-- 

1.the functions willcreate for like follow. 
 -->
<!-- ______________________ PHP STARTS ______________________ -->


<?php
//session start
session_start();
//session endes

//including start
include 'config.php';
include 'conn.php';
//including ended

$sql1 = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned` FROM `userdata` WHERE id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);

if($_SESSION['id']==0 or $row['banned'] == "yes"){
  echo '<script type="text/javascript">';
  echo 'window.location.href = "http://soclpie.com/intro.php?"';
  echo '</script>';

}

$sql11 = "SELECT  `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend`  , `url` FROM `user_post`order by id desc";
$a1 = mysqli_query($conn, $sql11);
$cardArray = [];
while ($row1 = mysqli_fetch_assoc($a1)) {
  $cardArray[] = $row1;
}



?>
<!-- ______________________ PHP ENDES ______________________ -->

<!DOCTYPE html>
<html>
<head>
  <title>Welcome home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?PHP include('assest.php');?>
</head>
<body>
  <div class="fixed-top">
  <?PHP include('menu_ss.php');?>
</div>
<div class="row">
  <?PHP foreach($cardArray as $key=>$val):?>

  <div class="col-md-6 offset-md-3 mt-5">
    <div class="card p-2" >
      <h5 class="card-title">@<?php echo $val['name'];?></h5>
      <?PHP if($val['media']!=''):?>
      <img src="<?php echo $val['media'];?>" class="card-img-top" alt="...">
      <?PHP endif;?>
      <div class="card-body">
        <div class="btn-group" role="group" aria-label="Basic example">
  <a type="button" class="btn btn-secondary">Like</a>
  <a type="button" class="btn btn-secondary">Follow</a>
  <a type="button" class="btn btn-secondary">Comment</a>
</div>
        <p class="card-text"><?php echo $val['description'];?></p>

        <a href="http://soclpie.com/veiw.php?creator_id='<?=$val['id']?>'" class="btn btn-primary">View detail</a>
      </div>
</div>
  </div>

  <?PHP endforeach;?>
</div>


</body>
</html>