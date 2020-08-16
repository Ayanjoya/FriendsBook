<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



</head>
<body style="background-color: #f5f5f5;padding:1%;">
<!-- Just an image -->


<?php
include 'conn.php';

$media = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `url`, `color`, `background`, `time`, `friend` FROM `user_post` WHERE id = '".$_GET['creator_id']."'";
$media_fun = mysqli_query($conn, $media);
$out_md = mysqli_fetch_assoc($media_fun);

$pro = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$out_md['user_id']."'";
$pro_fun = mysqli_query($conn, $pro);
$out_pro = mysqli_fetch_assoc($pro_fun);


?>

<?php

if($out_md['media'] != '' and $out_md['media2'] =='' and $out_md['url'] ==''){

?>
    
<div class="main">



<div class="media">

  <img src="<?php echo $out_pro['img']?>" class="mr-3" alt="..." style="height:50px;width:50px; object-fit:cover; border-radius:100%;">

  <div class="media-body">
    <h5 class="mt-0"><?= $out_pro['name']?></h5>

    <?php
    $fol = "SELECT count(*) as counter FROM `follow` WHERE user_id = '".$out_pro['user_id']."'";
    $fol_fun = mysqli_query($conn, $fol);
    $out_fol = mysqli_fetch_assoc($fol_fun);
    ?>
    <h6 style="font-size: 14px;"><?= $out_fol['counter'].' Followers'?></h6>

  </div>
</div>


<img src="<?= $out_md['media']?>" alt="" style="width:100%; margin-top:1%; height:86.5%; object-fit:cover;">


</div>














<?php
}

elseif ($out_md['url']!=''){


?>




<div class = "main">

<div class="media">
    
  <img src="<?php echo $out_pro['img']?>" class="mr-3" alt="..." style="height:50px;width:50px; object-fit:cover; border-radius:100%;">


  <div class="media-body">
    <h5 class="mt-0"><?= $out_pro['name']?></h5>
    <?php
    $fol = "SELECT count(*) as counter FROM `follow` WHERE user_id = '".$out_pro['user_id']."'";
    $fol_fun = mysqli_query($conn, $fol);
    $out_fol = mysqli_fetch_assoc($fol_fun);
    ?>
    <h6 style="font-size: 14px;"><?= $out_fol['counter'].' Followers'?></h6>
  </div>
</div>



<!-- <img src="<?= $out_md['media']?>" alt="" style="width:100%; margin-top:1%; height:80%; object-fit:cover;"> -->


<iframe style="width:100%; margin-top:1%; height:80%; object-fit:cover;" allowfullscreen src="<?= 'https://www.youtube.com/embed/'.substr($_GET['vidio_url'] , 32); ?>">
</iframe>

</div>



<?php }


elseif($out_md['media2'] != ''){

?>


<div style="border: solid 0.1px lightgray; height:100%; width:65%; padding:1%;float:left;background:white;">

<div class="media">
    
  <img src="<?php echo $out_pro['img']?>" class="mr-3" alt="..." style="height:50px;width:50px; object-fit:cover; border-radius:100%;">
  <div class="media-body">
    <h5 class="mt-0"><?= $out_pro['name']?></h5>
    <?php
    $fol = "SELECT count(*) as counter FROM `follow` WHERE user_id = '".$out_pro['user_id']."'";
    $fol_fun = mysqli_query($conn, $fol);
    $out_fol = mysqli_fetch_assoc($fol_fun);
    ?>
    <h6 style="font-size: 14px;"><?= $out_fol['counter'].' Followers'?></h6>
  </div>
</div>















<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 90%;">
  <div class="carousel-inner" style="height: 100%;">
    <div class="carousel-item active" style="height: 100%;">
      <img src="<?= $out_md['media']?>" class="d-block w-100" alt="..."style="width:100%; margin-top:1%; height:80%; object-fit:cover;">
    </div>
    <div class="carousel-item active" style="height: 100%;">
      <img src="<?= $out_md['media2']?>" class="d-block w-100" alt="..."style="width:100%; margin-top:1%; height:80%; object-fit:cover;">
    </div>
        <div class="carousel-item active" style="height: 100%;">
      <img src="<?= $out_md['media3']?>" class="d-block w-100" alt="..."style="width:100%; margin-top:1%; height:80%; object-fit:cover;">
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









</div>





<?php }?>





<div style="background:white;overflow:auto;border: solid 0.1px lightgray; height:auto;padding:1%;float:left; width:33%;height:96.5%;border-left:0px;position:fixed;left:66%;" class="comment">

<h5 style="padding-bottom: 2%;padding-top:2%;"><?= $out_md['description']?><a href="home.php"><img src="close.png" style="width:26px;float: right;"></a>

</h5>


<hr>
<?php

$com = "SELECT `id`, `user_id`, `post_id`, `creator_id`, `comment`, `time` FROM `comments` WHERE post_id = '".$_GET['creator_id']."' order by id desc";
$com_fun = mysqli_query($conn, $com);



while($out_com = mysqli_fetch_assoc($com_fun)){
    $com_pro = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$out_com['user_id']."'";
    $com_fun_pro = mysqli_query($conn, $com_pro);
    $out_com2 = mysqli_fetch_assoc($com_fun_pro);

?>

<div class="media" style="padding-top: 5%; padding-top:2%;padding-bottom:2%;">
  <img src="<?= $out_com2['img']?>" class="mr-3" alt="..." style="width:50px;height:50px;border-radius:100%; object-fit:cover;">
  <div class="media-body">

  <?php 
  
  if($out_com['creator_id']== $out_com2['user_id']){
  
  ?>

  <h5 class="mt-0"><?= $out_com2['name']?>
</h5>

  <img src="images.png" style="background-color: none;width:25px;">


    <?=$out_com['comment']?>

<?php
}
else{

?>

  <h5 class="mt-0"><?= $out_com2['name']?></h5>
    <?=$out_com['comment']?>


<?php }?>



</div>
</div>
<hr>

<?php }?>

<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>">

<input type="text" placeholder="Comment" style="position: fixed; top:85%; width:30%; font-size:150%; float:left; padding:0.2%;" name="comm">

<button class="btn btn-primary btn-block" style="position: fixed; top:92%; height:auto;width:30%;">comment</button>
</form>

</div>









<div style="background:white;overflow:auto;border: solid 0.1px lightgray; height:auto;padding:1%;float:left; width:100%;height:70%;border-left:0px;position:relative;top:auto;" class="commen2">

<h5 style="padding-bottom: 2%;padding-top:2%;"><?= $out_md['description']?><a href="home.php"><img src="close.png" style="width:26px;float: right;"></a>
</h5>
<hr>
<?php

$com = "SELECT `id`, `user_id`, `post_id`, `creator_id`, `comment`, `time` FROM `comments` WHERE post_id = '".$_GET['creator_id']."' order by id desc";
$com_fun = mysqli_query($conn, $com);



while($out_com = mysqli_fetch_assoc($com_fun)){
    $com_pro = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$out_com['user_id']."'";
    $com_fun_pro = mysqli_query($conn, $com_pro);
    $out_com2 = mysqli_fetch_assoc($com_fun_pro);

?>

<div class="media" style="padding-top: 5%; padding-top:2%;padding-bottom:2%;">
  <img src="<?= $out_com2['img']?>" class="mr-3" alt="..." style="width:50px;height:50px;border-radius:100%; object-fit:cover;">
  <div class="media-body">

  <?php 
  
  if($out_com['creator_id']== $out_com2['user_id']){
  
  ?>

  <h5 class="mt-0"><?= $out_com2['name']?>
</h5>

  <img src="images.png" style="background-color: none;width:25px;">
    <?=$out_com['comment']?>



<?php
}
else{

?>

  <h5 class="mt-0"><?= $out_com2['name']?></h5>
    <?=$out_com['comment']?>


<?php }?>



</div>
</div>
<hr>

<?php }?>
<div style="background-color: white; position: fixed; top:89%; width:30%; height:8%;">
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>">

<input type="text" placeholder="Comment" style="position: fixed; top:85%; width:97%; font-size:150%; float:left; padding:0.2%;" name="comm">


<button class="btn btn-primary btn-block" style="position: fixed; top:92%; height:auto;">comment</button>
</div>
</div>










<?php 

if($out_md['media'] != '' and $out_md['media2'] =='' and $out_md['url'] ==''){


?>
<h6 style = "display:none;">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_REQUEST['comm'] != ''){
  // collect value of input field
  $com_pro22 = "INSERT INTO `comments`(`user_id`, `post_id`, `creator_id`, `comment`) VALUES ('".$_SESSION['id']."' , '".$_GET['creator_id']."' , '".$out_md['user_id']."' , '".$_REQUEST['comm']."')";
  $com_fun_pro22 = mysqli_query($conn, $com_pro22);
  $out_com222 = mysqli_fetch_assoc($com_fun_pro22);

    echo'<script>

    // similar behavior as an HTTP redirect
    window.location.replace("veiw.php?creator_id='.$_GET['creator_id'].'");
    
    // similar behavior as clicking on a link
    window.location.href = "veiw.php?creator_id='.$_GET['creator_id'].'";
    </script>';
    }


}

?>
</h6>



<?php
}
elseif ($out_md['url']!=''){


?>

<h6 style = "display:none;">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_REQUEST['comm'] != ''){
  // collect value of input field
  $com_pro22 = "INSERT INTO `comments`(`user_id`, `post_id`, `creator_id`, `comment`) VALUES ('".$_SESSION['id']."' , '".$_GET['creator_id']."' , '".$out_md['user_id']."' , '".$_REQUEST['comm']."')";
  $com_fun_pro22 = mysqli_query($conn, $com_pro22);
  $out_com222 = mysqli_fetch_assoc($com_fun_pro22);

    echo '<script>

    // similar behavior as an HTTP redirect
    window.location.replace("veiw.php?creator_id='.$_GET['creator_id'].'&vidio_url='.$_GET['vidio_url'].'");
    
    // similar behavior as clicking on a link
    window.location.href = "veiw.php?creator_id='.$_GET['creator_id'].'&vidio_url='.$_GET['vidio_url'].'";
    </script>';
    }


}

?>
</h6>
<?php }

elseif ($out_md['media2']!=''){

?>
<h6 style = "display:none;">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_REQUEST['comm'] != ''){
  // collect value of input field
  $com_pro22 = "INSERT INTO `comments`(`user_id`, `post_id`, `creator_id`, `comment`) VALUES ('".$_SESSION['id']."' , '".$_GET['creator_id']."' , '".$out_md['user_id']."' , '".$_REQUEST['comm']."')";
  $com_fun_pro22 = mysqli_query($conn, $com_pro22);
  $out_com222 = mysqli_fetch_assoc($com_fun_pro22);

    echo'<script>

    // similar behavior as an HTTP redirect
    window.location.replace("veiw.php?creator_id='.$_GET['creator_id'].'");
    
    // similar behavior as clicking on a link
    window.location.href = "veiw.php?creator_id='.$_GET['creator_id'].'";
    </script>';
    }


}

?>
</h6>


<?php }?>


<style>

.comm{
  position: fixed; top:90%; width:26%; font-size:150%; float:left; padding:0.2%;
}
.main{
  border: solid 0.1px lightgray; height:100%; width:64%; padding:1%;float:left;background:white;}

.commen2{
  display: none;
}
@media only screen and (max-width: 909px) {

.commen2{
  display: block;
  width: 100%;
}

.comment{
  display: none;
}


.main{
  width: 100%;

}

.comm{
  width: 80%;
}

}


html,body{
height: 100%;
}
</style>
</body>
</html>