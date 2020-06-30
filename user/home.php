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
$sql11 = "SELECT  `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend`  , `url` FROM `user_post`order by id desc";
$a1 = mysqli_query($conn, $sql11);



while ($row1 = mysqli_fetch_assoc($a1)) {


if ($row1['color'] != ''){

?>


<div style="padding-top: 5%;">


<div style="padding-left: 20%;">
<div class="card" style="width: 18rem;height: 28rem;overflow: auto;background-color: <?php echo $row1['background'];?>;color: <?php echo $row1['color'];?>;border: solid 0.1px lightgray;">

  <div class="card-body">
        <h5 class="card-title" style=""><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text" ><h2><?php echo $row1['description'];?></h2></p>

    <a href="http://soclpie.com/veiw.php?creator_id='<?=$row1['id']?>'" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
  </div>
</div></div>	


</div>
	
<?php
}

elseif ($row1['color'] == '' and $row1['media2'] == '' and $row1['url'] == ''){


?>



<div style="padding-top: 5%;">


<div style="padding-left: 20%;">
<div class="card" style="width: 18rem;">
  <img src="<?php echo $row1['media'];?>" class="card-img-top" style = "height: 17rem;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = "" >
  <div class="card-body" style="background-color: <?php echo $row1['background'];?>;">
    <h5 class="card-title"><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text"><?php echo substr($row1['description'] , 0 , 18).'...';?></p>
    <a href="http://soclpie.com/veiw.php?creator_id=<?php echo $row1['id']?>" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
  </div>
</div></div>	


</div>


<?php
}


elseif ($row1['media2'] != ''  and $row1['media3'] != ''  and $row1['media4'] != '') {



?>




<div style="padding-top: 5%;">


<div style="padding-left: 20%;">
<div class="card" style="width: 18rem;">




<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $row1['media'];?>"style = "height: 17rem;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = "">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $row1['media2'];?>"style = "height: 17rem;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = "">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $row1['media3'];?>"style = "height: 17rem;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = ""class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="<?php echo $row1['media4'];?>"style = "height: 17rem;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = ""class="d-block w-100">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  

































  <div class="card-body" style="background-color: <?php echo $row1['background'];?>;">
    <h5 class="card-title"><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text"><?php echo substr($row1['description'] , 0 , 18).'...';?></p>
    <a href="http://soclpie.com/veiw.php?creator_id='<?=$row1['id']?>'" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
  </div>
</div></div>  


</div>










<?php
}

elseif ($row1['url'] != '') {

?>


<div style="padding-top: 5%;">


<div style="padding-left: 20%;">
<div class="card" style="width: 18rem;">
  <img src="<?php echo $row1['media'];?>" class="card-img-top" style = "height: 17rem;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = "">
  <div class="card-body" style="background-color: <?php echo $row1['background'];?>;">
    <h5 class="card-title"><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text"><?php echo substr($row1['description'] , 0 , 18).'...';?></p>
    <a href="<?php echo 'http://soclpie.com/vidio.php?vidio_url='.$row1['url']?>/&creator_id=<?=$row1['id']?>" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
  </div>
</div></div>  


</div>




<?php


}


}

?>





<style type="text/css">
	

.a1{
	background-color: #0070FF;
	border-color: #0070FF;
	color: white;
}


</style>



</body>
</html>





