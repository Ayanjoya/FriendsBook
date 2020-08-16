<?php session_start();?>

<!DOCTYPE html>
<html style="overflow-x: scroll;overflow-x: hidden;">

<head>
  <link rel="shortcut icon" type="image/x-icon" href="single.png" />

  <title>Welcome to the Soclpie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

include 'menu.php';
include 'conn.php';
    $sql11 = "SELECT  `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend`  , `url` FROM `user_post` WHERE id = '".$_GET['id']."'";
    $a1 = mysqli_query($conn, $sql11);



    $row1 = mysqli_fetch_assoc($a1);

      if ($row1['color'] != '') {


?>


<!--code-->

<form action="edit_content.php?id=<?php echo $row1['id']?>" method="post">

        <div style="padding-top: 20px;width:90%;margin: auto;">


          <div class="padd">

            <div class="card text3" style="height: auto;border: solid 0.1px lightgray;">

              <div class="card-body">
                <h5 class="card-title"><a href="veiw_profile.php?id=<?=$row1['user_id']?>"><?php echo "@" . $row1['name']; ?></a></h5>
                <p class="card-text">
                  <textarea style="font-family:sans-serif; border: solid 1px lightgray;width:100%;height:auto;" name = "desc"><?php echo $row1['description']; ?></textarea>
                </p>

<button class = "btn btn-primary">Submit</button>
<a class = "btn btn-danger" href="delete_content.php?id=<?php echo $row1['id']?>">Delete</a>

</div></div></div></div>


</form>


<?php }

elseif ($row1['color'] == '' and $row1['media2'] == '' and $row1['url'] == '') {


?>


<!--code-->

<div style="padding-top: 1px;width:90%; height:auto;margin: auto;">

<form action="edit_content.php?id=<?php echo $row1['id']?>" method="post">
  


            <div class="card" style="height:auto;">
                <h5 class="card-title"><a href="veiw_profile.php?id=<?=$row1['user_id']?>"><?php echo "@" . $row1['name']; ?></a> <?php include'delete.php';?> </h5>
              <a href="http://soclpie.com/veiw.php?creator_id=<?php echo $row1['id'] ?>">
                <img src="<?php echo $row1['media']; ?>" class="card-img-top img-fluid"style = "height: 25rem; object-fit: cover;" alt="">
              </a>
              <div class="card-body" style="background-color: <?php echo $row1['background']; ?>;">
                                <textarea class="card-text" style="width:100%; height:auto; border:solid 1px lightgray;" name="desc"><?php echo $row1['description']; ?></textarea>
<button class = "btn btn-primary">Submit</button>
</form>
<a class = "btn btn-danger" href="delete_content.php?id=<?php echo $row1['id']?>">Delete</a>
              </div></div></div>



<?php }

 elseif ($row1['url'] != '') {
?>


<!--code-->

<div style="padding-top: 10px;width:90%; height:auto;margin: auto;">

<form action="edit_content.php?id=<?php echo $row1['id']?>" method="post">
  


            <div class="card" style="height:auto;">
                <h5 class="card-title"><a href="veiw_profile.php?id=<?=$row1['user_id']?>"><?php echo "@" . $row1['name']; ?></a> <?php include'delete.php';?> </h5>
              <a href="http://soclpie.com/veiw.php?creator_id=<?php echo $row1['id'] ?>">
                <iframe style="height: 25rem;border: 0px;width:90%;" allowfullscreen src="<?= 'https://www.youtube.com/embed/'.substr($row1['url'] , 32); ?>">
</iframe>

              </a>
              <div class="card-body" style="background-color: <?php echo $row1['background']; ?>;">
                                <textarea class="card-text" style="width:100%; height:auto; border:solid 1px lightgray;" name="desc"><?php echo $row1['description']; ?></textarea>

                                <textarea class="card-text" style="width:100%; height:auto; border:solid 1px lightgray;" name="url"><?php echo $row1['url']; ?></textarea>
<button class = "btn btn-primary">Submit</button>
</form>
<a class = "btn btn-danger" href="delete_content.php?id=<?php echo $row1['id']?>">Delete</a>
              </div></div></div>



<?php }

elseif ($row1['media2'] != ''  and $row1['media3'] != ''  and $row1['media4'] != '') {
?>




<?php }?>



</head></html>