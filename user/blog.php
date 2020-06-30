<!DOCTYPE html>
<html style="overflow-x: scroll;overflow-x: hidden;">
<head>
	<title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<div class="fixed-top">
<?php
session_start();

include 'config.php';
include 'menu.php';
// include 'profile_side.php';


?>




<?php

include 'conn.php';
$sql1 = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned` FROM `userdata` WHERE id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);


if($_SESSION['id']==0 or $row['banned'] == "yes"){


  echo '<script type="text/javascript">';

echo 'window.location.href = "http://soclpie.com/intro.php?"';


echo '</script>';


}





?>
</div>

<body style="overflow: auto; font-family: roboto;">


<div class="row row-cols-0 row-cols-md-3" style="padding-top: 90px;">


<?php
$sql11 = "SELECT `id`, `user_id`, `name`, `email`, `title`, `description`, `img`, `time` FROM `blog` order by id desc";
$a1 = mysqli_query($conn, $sql11);



while ($row1 = mysqli_fetch_assoc($a1)) {


?>


<div style="padding-top: 5%;">


<div style="padding-left: 20%;">
<div class="card" style="width: 18rem;">
  <img src="<?php echo $row1['img']?>" class="card-img-top" alt="..." style = "height:17rem;object-fit: cover;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row1['name']?></h5>

    <p class="card-text"><span style="color:black; font-size: 140%; font-family: Verdana;"><?= $row1['title']?></span><br><?php echo $row1['description']?></p>
    <a href="#" class="btn btn-primary">Veiw Detail</a>
  </div>
</div> 


</div>




<?php


}




?>





<style type="text/css">
	

.a1{
	background-color: #0070FF;
	border-color: #0070FF;
	color: white;
}


</style>

        <a class="btn btn-primary fixed-bottom btn-lg mr-auto" href="<?=$url;?>post_blog.php?" style = "font-size: 220%;width:70px;border-radius: 80%;">B</a>


</body>
</html>





