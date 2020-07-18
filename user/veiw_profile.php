<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
session_start();

include 'menu.php';
?>



<?php



include 'conn.php';

	$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `dob`, `bio` ,`address`, `img` ,`back_cover`FROM `profile` WHERE user_id = '".$_GET['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row111 = mysqli_fetch_assoc($a);



?>

<style type="text/css">
	

.blckk{
	background-color:#006BFC;border-color: #006BFC;color: white;
}
.blckk1{
	background-color:#FF4949;border-color: #FF4949;color: white;
}



	
</style>







<div style="background-image: url('<?php echo $row111['back_cover'];?>');height:50%;width:100%;position: absolute;bottom:41.5%;background-size: cover;background-position: center;"></div>

<div  style="background-image: url('<?php echo $row111['img'];?>');height:200px;width:200px;position: absolute;bottom:31%;background-size:100%;border-radius: 100%; background-position: center; border:solid white 8px;"></div>










<h3 style="position: absolute;left:1%;bottom:27%;"><?= $row111['name']?></h3>

<h5 style="position: absolute;left:1%;bottom:24%;color: #5D5C5C;"><?= $row111['email']?></h5>

<hr style="border: solid gray 2px;position: relative;top:540px;">


<div style="height:30%;overflow: auto;position: relative;bottom: -530px;background-color: white;">



<h5 style="padding-left:1%;padding-top:1%;" class="text-dark"><?= $row111['bio']?></h5>

</div>













<div style="background-color: white;height: 7%;border: solid 1.5px;width: 100%;position: relative;left:0%;top:67%;border-right: 0px;border-left: 0px;">





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



































































































































<div style="position: relative;top:70%;border:;">
	



<div class="row row-cols-0 row-cols-md-3">


<?php
$sql11 = "SELECT  `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend`  , `url` FROM `user_post`where user_id = '".$_GET['id']."' order by id desc";
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

    <a href="http://205.147.99.187/FriendsBook/user/veiw.php?creator_id='<?=$row1['id']?>'" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
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
    <a href="http://205.147.99.187/FriendsBook/user/veiw.php?creator_id=<?php echo $row1['id']?>" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
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
    <a href="http://205.147.99.187/FriendsBook/user/veiw.php?creator_id='<?=$row1['id']?>'" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
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
    <a href="<?php echo 'http://205.147.99.187/FriendsBook/user/vidio.php?vidio_url='.$row1['url']?>/&creator_id=<?=$row1['id']?>" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
  </div>
</div></div>  


</div>




<?php


}


}

?>







</div>







<style type="text/css">
	
body , html{
	height: 100%;
}

</style>

<style type="text/css">
	

.a1{
	background-color: #0070FF;
	border-color: #0070FF;
	color: white;
}


</style>
</body>
</html>