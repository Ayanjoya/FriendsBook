
<?php
session_start();
include 'config.php';

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
<!DOCTYPE html>
<html style="overflow-x: scroll;overflow-x: hidden;">
<head>
  <title>Welcome to the Soclpie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
  
function trans() {
  window.location = 'http://soclpie.com/veiw.php?creator_id='<?=$row1['id']?>'';

  window.location.href = 'http://soclpie.com/veiw.php?creator_id='<?=$row1['id']?>'';

}

</script>
</head>

<body style="overflow: auto; font-family: roboto; background-color: #EEEEEE;">

<div class="fixed-top">
<?PHP include 'menu.php';?>
</div>

<div class="row row-cols-0 row-cols-md-1 ml-auto" style="padding-top: 90px;">

<?php
$sql11 = "SELECT  `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend`  , `url` FROM `user_post`order by id desc";
$a1 = mysqli_query($conn, $sql11);
while ($row1 = mysqli_fetch_assoc($a1)) {

if ($row1['color'] != ''){

?>

<div style="padding-top: 5%;min-width:100%;">
<div class="padd">
<div class="card text2" style="height: 28rem;overflow: auto;background-color: <?php echo $row1['background'];?>;color: <?php echo $row1['color'];?>;border: solid 0.1px lightgray;" >
  <div class="card-body">
        <h5 class="card-title" style=""><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text" ><h2><?php echo $row1['description'];?></h2></p>

    <a href="http://soclpie.com/veiw.php?creator_id='<?=$row1['id']?>'" class="btn btn-outline-danger btn a1">Veiw Details</a>
  

  </div>
      <div style="background-color: white;">
        <div style=" margin:1.5%;">

<?php

$like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '".$_SESSION['id']."' and post_id = '".$row1['id']."'";
$run1 = mysqli_query($conn, $like1);
$data1 = mysqli_fetch_assoc($run1);

if($data1){

  ?>

<form action="unlike.php?creator_id=<?= $row1['id']?>" method="post" >



<button style = "background-image: url('heart2.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

</form>

<?php 

}

else{

?>





<form action="create_like.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('heart.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

</form>



<?php }




?>

<h6 style="visibility: hidden;display: none;">
<?php



$follow1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE name = '".$row1['name']."'";
$run11 = mysqli_query($conn, $follow1);
$data11 = mysqli_fetch_assoc($run11);




$follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '".$_SESSION['id']."' and creator_id = '".$data11['id']."'";
$run1 = mysqli_query($conn, $follow);
$data1 = mysqli_fetch_assoc($run1);


?>
</h6>
<?php

if ($data1){

?>









<form action="unfollow.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('unfollow.webp');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float: left;"></button>

</form>





<?php }

else{

?>

<form action="follow.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('add.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float: left;"></button>

</form>




















<?php }?>


<form action="comments.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('comment.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

</form>

</div>
</div>

</div>  


</div>

</div>











<div style="padding-top: 5%;min-width:100%;">


<div class="padd">

<div class="card text3" style="height: auto;overflow: auto;border: solid 0.1px lightgray;" >

  <div class="card-body">
        <h5 class="card-title" style=""><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text" ><h2><?php echo $row1['description'];?></h2></p>

    <a href="http://soclpie.com/veiw.php?creator_id='<?=$row1['id']?>'" class="btn btn-outline-danger btn a1">Veiw Details</a>
  

  </div>
      <div style="background-color: white; border-top: solid 1px;">
        <div style=" margin:1.5%;">

<?php

$like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '".$_SESSION['id']."' and post_id = '".$row1['id']."'";
$run1 = mysqli_query($conn, $like1);
$data1 = mysqli_fetch_assoc($run1);

if($data1){

  ?>

<form action="unlike.php?creator_id=<?= $row1['id']?>" method="post" >



<button style = "background-image: url('heart2.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

</form>

<?php 

}

else{

?>





<form action="create_like.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('heart.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

</form>



<?php }




?>

<h6 style="visibility: hidden;display: none;">
<?php



$follow1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE name = '".$row1['name']."'";
$run11 = mysqli_query($conn, $follow1);
$data11 = mysqli_fetch_assoc($run11);




$follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '".$_SESSION['id']."' and creator_id = '".$data11['id']."'";
$run1 = mysqli_query($conn, $follow);
$data1 = mysqli_fetch_assoc($run1);


?>
</h6>
<?php

if ($data1){

?>









<form action="unfollow.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('unfollow.webp');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float: left;"></button>

</form>





<?php }

else{

?>

<form action="follow.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('add.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float: left;"></button>

</form>




















<?php }?>


<form action="comments.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('comment.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

</form>

</div>
</div>

</div>  


</div>

</div>


















<?php
}

elseif ($row1['color'] == '' and $row1['media2'] == '' and $row1['url'] == ''){


?>



<div style="padding-top: 5%;min-width:100%;">


<div class="padd">
<div class="card">
  <h5 class="card-title" style="padding-top:1.5%;padding-left: 2%;"><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
  <a href="http://soclpie.com/veiw.php?creator_id=<?php echo $row1['id']?>">
  <img src="<?php echo $row1['media'];?>" class="card-img-top img-fluid" alt = "" >
</a>
  <div class="card-body" style="background-color: <?php echo $row1['background'];?>;">
    <div style="background-color: white;">


<?php

$like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '".$_SESSION['id']."' and post_id = '".$row1['id']."'";
$run1 = mysqli_query($conn, $like1);
$data1 = mysqli_fetch_assoc($run1);

if($data1){

  ?>

<form action="unlike.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('heart2.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

</form>

<?php 

}

else{

?>





<form action="create_like.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('heart.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

</form>



<?php }




?>

<h6 style="visibility: hidden;display: none;">
<?php



$follow1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE name = '".$row1['name']."'";
$run11 = mysqli_query($conn, $follow1);
$data11 = mysqli_fetch_assoc($run11);




$follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '".$_SESSION['id']."' and creator_id = '".$data11['id']."'";
$run1 = mysqli_query($conn, $follow);
$data1 = mysqli_fetch_assoc($run1);


?>
</h6>
<?php

if ($data1){

?>









<form action="unfollow.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('unfollow.webp');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float: left;"></button>

</form>





<?php }

else{

?>

<form action="follow.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('add.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%; float: left;"></button>

</form>




















<?php }?>
<form action="comment.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('comment.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;"></button>

</form>

</div>

    
    <p class="card-text"><?php echo $row1['description'];?></p>
<!--     <a href="http://soclpie.com/veiw.php?creator_id=<?php echo $row1['id']?>" class="btn btn-outline-danger btn a1">Veiw Details</a>
 -->  </div>
</div>





























</div>  


</div>


<?php
}


elseif ($row1['media2'] != ''  and $row1['media3'] != ''  and $row1['media4'] != '') {



?>




<div style="padding-top: 5%;">


<div class="padd">
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
    <p class="card-text"><?php echo $row1['description'];?></p>
    <a href="http://soclpie.com/veiw.php?creator_id='<?=$row1['id']?>'" class="btn btn-outline-danger btn a1">Veiw Details</a>
  </div>
</div></div>  


</div>










<?php
}

elseif ($row1['url'] != '') {

?>


<div style="padding-top: 5%;">


<div class="padd">
<div class="card">
  <img src="<?php echo $row1['media'];?>" class="card-img-top" style = "height: auto;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = "">
  


    <div style="background-color: white; margin-top:5%;">


<?php

$like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '".$_SESSION['id']."' and post_id = '".$row1['id']."'";
$run1 = mysqli_query($conn, $like1);
$data1 = mysqli_fetch_assoc($run1);

if($data1){

  ?>

<form action="unlike.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('heart2.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

</form>

<?php 

}

else{

?>





<form action="create_like.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('heart.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

</form>



<?php }




?>

<h6 style="visibility: hidden;display: none;">
<?php



$follow1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE name = '".$row1['name']."'";
$run11 = mysqli_query($conn, $follow1);
$data11 = mysqli_fetch_assoc($run11);




$follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '".$_SESSION['id']."' and creator_id = '".$data11['id']."'";
$run1 = mysqli_query($conn, $follow);
$data1 = mysqli_fetch_assoc($run1);


?>
</h6>
<?php

if ($data1){

?>









<form action="unfollow.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('unfollow.webp');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

</form>





<?php }

else{

?>

<form action="follow.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('add.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

</form>




















<?php }?>

<form action="comments.php?creator_id=<?= $row1['id']?>" method="post">



<button style = "background-image: url('comment.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

</form>



</div>



  <div class="card-body" style="background-color: <?php echo $row1['background'];?>;">
    <h5 class="card-title"><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text"><?php echo $row1['description'];?></p>
    <a href="<?php echo 'http://soclpie.com/vidio.php?vidio_url='.$row1['url']?>/&creator_id=<?=$row1['id']?>" class="btn btn-outline-danger btn a1">Veiw Details</a>
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

























<style>
.card{
  width: 60%;
}


  .padd{
    padding-left: 26%;
  }

.text2{
  display: none;
}



@media only screen and (max-width: 990px) {
  .card{
    width: auto;
    margin-left:auto;margin-right:auto;

  }




  .card-img-top{
/*    height: auto;object-fit: cover;background-color: <?php echo $row1['background'];?>;
*/  }

  .padd{
    padding-left: 0%;
  }


}


</style>



















</body>
</html>




