<?php
session_start();
include 'config.php';

// include 'profile_side.php';
?>
<?php



include 'conn.php';

$sql1 = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned` FROM `userdata` WHERE id = '" . $_SESSION['id'] . "'";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);

if ($_SESSION['id'] == 0 or $row['banned'] == "yes") {
  echo '<script type="text/javascript">';
  echo 'window.location.href = "http://soclpie.com/intro.php?"';
  echo '</script>';
}
?>



<!DOCTYPE html>
<html style="overflow-x: scroll;overflow-x: hidden;">

<head>
  <link rel="shortcut icon" type="image/x-icon" href="logo.png" />

  <title>Welcome to the Soclpie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">




<?php

if (!isset($_SESSION['CREATED'])) {
    $_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 100000000000000000000000000000) {
    // session started more than 30 minutes ago
    session_destroy();    // change session ID for the current session and invalidate old session ID
    $_SESSION['CREATED'] = time();  // update creation time
}


?>

</div>

















</head>

<body style="overflow: auto; font-family: roboto; background-color: #f5f5f5;">

  <div class="fixed-top">
    <?PHP include 'menu.php'; ?>
  </div>
  
 <div>

<div style="padding-top:90px;">
<?php include'suggest.php';?>
<?php include'profile_card.php';?>


</div>

<?php


?>

  <div class="row row-cols-0 row-cols-md-1 m-auto" style="padding-top: 00px;">

    <?php
    $sql11 = "SELECT  `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend`  , `url` FROM `user_post`order by id desc";
    $a1 = mysqli_query($conn, $sql11);



    while ($row1 = mysqli_fetch_assoc($a1)){
    	?>




<div style="padding-top: 1px;min-width:100%;">


<div class="padd">

  <div class="card text3" style="height: auto;border: solid 0.1px lightgray;">
  <div class="card-header">
    Creation
  </div>
  <div class="card-body">
    <h5 class="card-title">Create Post</h5>
    <p class="card-text">Create Post To Share Your Life Wihth Your Friends.</p>
    <a href="post.php" class="btn btn-primary">Create Post</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div></div></div>

<?php


      if ($row1['color'] != '') {


  

    ?>






        <div style="padding-top: 1px;min-width:100%;">


          <div class="padd">

            <div class="card text3" style="height: auto;border: solid 0.1px lightgray;">

              <div class="card-body">
                <h5 class="card-title"><a href="veiw_profile.php?id=<?=$row1['user_id']?>"><?php echo "@" . $row1['name']; ?></a><?php include'delete.php';?> </h5>
                <p class="card-text">
                  <h6 style="font-family:sans-serif;"><?php echo $row1['description']; ?></h2>
                </p>



              </div>
              <div style="background-color: white; border-top: solid 1px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px ;">
                <div style=" margin:1.5%; margin-bottom:45px;">

                  <?php

                  $like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '" . $_SESSION['id'] . "' and post_id = '" . $row1['id'] . "'";
                  $run1 = mysqli_query($conn, $like1);
                  $data1 = mysqli_fetch_assoc($run1);

                  if ($data1) {

                  ?>

                    <form action="unlike.php?creator_id=<?= $row1['id'] ?>" method="post">



                      <button style="background-image: url('heart2.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

                    </form>

                  <?php

                  } else {

                  ?>





                    <form action="create_like.php?creator_id=<?= $row1['id'] ?>" method="post">



                      <button style="background-image: url('heart3.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

                    </form>



                  <?php }




                  ?>

                  <h6 style="visibility: hidden;display: none;">
                    <?php



                    $follow1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE name = '" . $row1['name'] . "'";
                    $run11 = mysqli_query($conn, $follow1);
                    $data11 = mysqli_fetch_assoc($run11);




                    $follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '" . $_SESSION['id'] . "' AND creator_id = '" . $row1['user_id'] . "'";
                    $run1 = mysqli_query($conn, $follow);
                    $data1 = mysqli_fetch_assoc($run1);


                    ?>
                  </h6>
                  <?php

                  if ($data1) {

                  ?>









                    <form action="unfollow.php?creator_id=<?= $row1['id'] ?>" method="post">



                      <button style="background-image: url('unfollow.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float: left;"></button>

                    </form>





                  <?php } else {

                  ?>

                    <form action="follow.php?creator_id=<?= $row1['id'] ?>" method="post">



                      <button style="background-image: url('add4.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float: left;"></button>

                    </form>




















                  <?php } ?>


                  <form action="comments.php?creator_id=<?= $row1['id'] ?>" method="post">



                    <button style="background-image: url('comment.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

                  </form>

                </div>
              </div>

            </div>


          </div>

        </div>


















      <?php
      } elseif ($row1['color'] == '' and $row1['media2'] == '' and $row1['url'] == '') {


      ?>




        <div style="padding-top: 1px;min-width:100%;">


          <div class="padd">
            <div class="card" style="">
                <h5 class="card-title"><a href="veiw_profile.php?id=<?=$row1['user_id']?>"><?php echo "@" . $row1['name']; ?></a> <?php include'delete.php';?> </h5>
              <a href="http://soclpie.com/veiw.php?creator_id=<?php echo $row1['id'] ?>">
                <img src="<?php echo $row1['media']; ?>" class="card-img-top img-fluid" style="border-radius: 2%;" alt="">
              </a>
              <div class="card-body" style="background-color: <?php echo $row1['background']; ?>;">
                <div style="background-color: white;">


                  <?php

                  $like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '" . $_SESSION['id'] . "' and post_id = '" . $row1['id'] . "'";
                  $run1 = mysqli_query($conn, $like1);
                  $data1 = mysqli_fetch_assoc($run1);

                  if ($data1) {

                  ?>

                    <form action="unlike.php?creator_id=<?= $row1['id'] ?>" method="post">



                      <button style="background-image: url('heart2.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

                    </form>

                  <?php

                  } else {

                  ?>





                    <form action="create_like.php?creator_id=<?= $row1['id'] ?>" method="post">



                      <button style="background-image: url('heart3.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

                    </form>



                  <?php }




                  ?>

                  <h6 style="visibility: hidden;display: none;">
                    <?php



                    $follow1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE name = '" . $row1['name'] . "'";
                    $run11 = mysqli_query($conn, $follow1);
                    $data11 = mysqli_fetch_assoc($run11);




                    $follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '" . $_SESSION['id'] . "' and creator_id = '" . $data11['user_id'] . "'";
                    $run1 = mysqli_query($conn, $follow);
                    $data1 = mysqli_fetch_assoc($run1);


                    ?>
                  </h6>
                  <?php

                  if ($data1) {

                  ?>









                    <form action="unfollow.php?creator_id=<?= $row1['id'] ?>" method="post">



                      <button style="background-image: url('unfollow.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float: left;"></button>

                    </form>





                  <?php } else {

                  ?>

                    <form action="follow.php?creator_id=<?= $row1['id'] ?>" method="post">



                      <button style="background-image: url('add4.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%; float: left;"></button>

                    </form>




















                  <?php } ?>
                  <form action="comment.php?creator_id=<?= $row1['id'] ?>" method="post">



                    <button style="background-image: url('comment.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;"></button>

                  </form>

                </div>


                <p class="card-text"><?php echo $row1['description']; ?></p>
                <!--     <a href="http://soclpie.com/veiw.php?creator_id=<?php echo $row1['id'] ?>" class="btn btn-outline-danger btn a1">Veiw Details</a>
 -->
              </div>
            </div>





























          </div>


        </div>


      <?php
      } elseif ($row1['media2'] != ''  and $row1['media3'] != ''  and $row1['media4'] != '') {



      ?>



        <div style="padding-top: 1px;">


          <div class="padd">
            <div class="card" style="padding: 13px;">

                <h5 class="card-title"><a href="veiw_profile.php?id=<?=$row1['user_id']?>"><?php echo "@" . $row1['name']; ?></a><?php include'delete.php';?> </h5>



              <div id="carouselExampleControls<?php echo $row1['id']; ?>" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $row1['media']; ?>" style="height: auto;object-fit: cover;background-color: <?php echo $row1['background']; ?>;" alt="">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $row1['media2']; ?>" style="height: auto;object-fit: cover;background-color: <?php echo $row1['background']; ?>;" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $row1['media3']; ?>" style="height: auto;object-fit: cover;background-color: <?php echo $row1['background']; ?>;" alt="" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $row1['media4']; ?>" style="height: auto;object-fit: cover;background-color: <?php echo $row1['background']; ?>;" alt="" class="d-block w-100">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls<?php echo $row1['id']; ?>" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls<?php echo $row1['id']; ?>" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

















              <div style="background-color: white; margin-top:5%; margin-left:13px;">


                <?php

                $like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '" . $_SESSION['id'] . "' and post_id = '" . $row1['id'] . "'";
                $run1 = mysqli_query($conn, $like1);
                $data1 = mysqli_fetch_assoc($run1);

                if ($data1) {

                ?>

                  <form action="unlike.php?creator_id=<?= $row1['id'] ?>" method="post">



                    <button style="background-image: url('heart2.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

                  </form>

                <?php

                } else {

                ?>





                  <form action="create_like.php?creator_id=<?= $row1['id'] ?>" method="post">



                    <button style="background-image: url('heart3.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

                  </form>



                <?php }




                ?>

                <h6 style="visibility: hidden;display: none;">
                  <?php



                  $follow1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE name = '" . $row1['name'] . "'";
                  $run11 = mysqli_query($conn, $follow1);
                  $data11 = mysqli_fetch_assoc($run11);




                  $follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '" . $_SESSION['id'] . "' and creator_id = '" . $data11['user_id'] . "'";
                  $run1 = mysqli_query($conn, $follow);
                  $data1 = mysqli_fetch_assoc($run1);


                  ?>
                </h6>
                <?php

                if ($data1) {

                ?>









                  <form action="unfollow.php?creator_id=<?= $row1['id'] ?>" method="post">



                    <button style="background-image: url('unfollow.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

                  </form>





                <?php } else {

                ?>

                  <form action="follow.php?creator_id=<?= $row1['id'] ?>" method="post">



                    <button style="background-image: url('add4.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

                  </form>




















                <?php } ?>

                <form action="comments.php?creator_id=<?= $row1['id'] ?>" method="post">



                  <button style="background-image: url('comment.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

                </form>



              </div>

              <div class="card-body" style="background-color: <?php echo $row1['background']; ?>;">
                <p class="card-text"><?php echo $row1['description']; ?></p>
              </div>
            </div>
          </div>


        </div>










      <?php
      } elseif ($row1['url'] != '') {

      ?>


        <div style="padding-top: 1px;min-width:100%;">


          <div class="padd">
            <div class="card" style="">
                <h5 class="card-title"><a href="veiw_profile.php?id=<?=$row1['user_id']?>"><?php echo "@" . $row1['name']; ?></a><?php include'delete.php';?> </h5>
              <a href="<?php echo 'veiw.php?vidio_url=' . $row1['url'] ?>/&creator_id=<?= $row1['id'] ?>">

                <img src="<?php echo $row1['media']; ?>" class="card-img-top vid" style="height: auto;object-fit: cover;background-color: <?php echo $row1['background']; ?>; " alt="">
                <img src="play.png" class="card-img-top pp" style="width: 50px;object-fit: cover;background-color: <?php echo $row1['background']; ?>;  position:absolute;right:5%; top:15%;" alt="">

              </a>


              <div style="background-color: white; margin-top:5%; margin-left:13px;">


                <?php

                $like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '" . $_SESSION['id'] . "' and post_id = '" . $row1['id'] . "'";
                $run1 = mysqli_query($conn, $like1);
                $data1 = mysqli_fetch_assoc($run1);

                if ($data1) {

                ?>

                  <form action="unlike.php?creator_id=<?= $row1['id'] ?>" method="post">



                    <button style="background-image: url('heart2.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

                  </form>

                <?php

                } else {

                ?>





                  <form action="create_like.php?creator_id=<?= $row1['id'] ?>" method="post">



                    <button style="background-image: url('heart3.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;float: left;"></button>

                  </form>



                <?php }




                ?>

                <h6 style="visibility: hidden;display: none;">
                  <?php



                  $follow1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE name = '" . $row1['name'] . "'";
                  $run11 = mysqli_query($conn, $follow1);
                  $data11 = mysqli_fetch_assoc($run11);




                  $follow = "SELECT `id`, `user_id`, `creator_id`, `post_id` ,`time` FROM `follow` WHERE user_id = '" . $_SESSION['id'] . "' and creator_id = '" . $data11['user_id'] . "'";
                  $run1 = mysqli_query($conn, $follow);
                  $data1 = mysqli_fetch_assoc($run1);


                  ?>
                </h6>
                <?php

                if ($data1) {

                ?>









                  <form action="unfollow.php?creator_id=<?= $row1['id'] ?>" method="post">



                    <button style="background-image: url('unfollow.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

                  </form>





                <?php } else {

                ?>

                  <form action="follow.php?creator_id=<?= $row1['id'] ?>" method="post">



                    <button style="background-image: url('add4.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

                  </form>




















                <?php } ?>

                <form action="comments.php?creator_id=<?= $row1['id'] ?>" method="post">



                  <button style="background-image: url('comment.png');background-size:100%; background-position: center;height: 30px;width: 30px;border:none;background-color: white;margin-left:2%;float:left;"></button>

                </form>



              </div>



              <div class="card-body" style="background-color: <?php echo $row1['background']; ?>; ">
                <p class="card-text"><?php echo $row1['description']; ?></p>
                <!-- <a href="<?php echo 'http://soclpie.com/vidio.php?vidio_url=' . $row1['url'] ?>/&creator_id=<?= $row1['id'] ?>" class="btn btn-outline-danger btn a1">Veiw Details</a> -->
              </div>
            </div>
          </div>


        </div>

</div>


    <?php


      }
    }

    ?>





    <style type="text/css">
      .a1 {
        background-color: #0070FF;
        border-color: #F75D34;
        color: white;
        background-color: #F75D34;
      }
    </style>

























    <style>
      .card {
        width: 60%;
        padding: 13px;
        border-radius: 0px;
      }


      .padd {
        padding-left: 26%;
      }

      .text2 {
        display: none;
      }

      .card-title {
        border-radius: 20px;
      }

      .vid {
        border-radius: 20px;
      }


      .d-block{
        border-radius: 20px;
      }



      @media only screen and (max-width: 990px) {
      	   .sug,.sug2{
        	display: none;
        }
      }

       @media only screen and (max-width: 934px) {




        .card {
          width: 100%;

          padding: 10px;



        }

        .card-title {
          border-radius: 10px;
        }

        .vid {
          border-radius: 10px;
        }

        .card-img-top {
          height: auto;
          object-fit: cover;
          background-color: <?php echo $row1['background']; ?>;
        }

        .padd {
          padding-left: 0%;
        }

     


      }
    </style>



















</body>

</html>