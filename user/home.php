<!DOCTYPE html>
<html style="overflow-x: scroll;overflow-x: hidden;">
<head>
	<title></title>




<div class="fixed-top">
<?php
session_start();


include 'menu.php';
// include 'profile_side.php';


?>



<?php

include 'conn.php';
$sql1 = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned` FROM `userdata` WHERE id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);

if($_SESSION['id']==0 or $row['banned'] == "yes"){
	header('Location: http://localhost:8080/my_fb/user/intro.php?');

}




?>
</div>

<body style="overflow: hidden; font-family: roboto;">




<div class="row row-cols-0 row-cols-md-3">


<?php
$sql11 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `color`, `background`,`media`, `time` FROM `user_post` order by id desc";
$a1 = mysqli_query($conn, $sql11);



while ($row1 = mysqli_fetch_assoc($a1)) {


if ($row1['color'] != ''){

?>


<div style="padding-top: 5%;">


<div style="padding-left: 20%;">
<div class="card" style="width: 18rem;height: 28rem;">

  <div class="card-body" style="background-color: <?php echo $row1['background'];?>;color: <?php echo $row1['color'];?>;">
        <h5 class="card-title" style=""><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text" ><h2><?php echo $row1['description']?></h2></p>

    <a href="veiw.php" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
  </div>
</div></div>	


</div>
	
<?php
}

elseif ($row1['color'] == ''){


?>


<div style="padding-top: 5%;">


<div style="padding-left: 20%;">
<div class="card" style="width: 18rem;">
  <img src="<?php echo $row1['media'];?>" class="card-img-top" style = "height: 17rem;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = "">
  <div class="card-body" style="background-color: <?php echo $row1['background'];?>;">
    <h5 class="card-title"><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text"><?php echo $row1['description']?></p>
    <a href="veiw.php" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
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






