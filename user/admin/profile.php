<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php session_start();include'menu.php';include'conn.php';?>








<div class="pt-0">
<div class="w-100 bg-dark pt-3 ">
	

<form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

  <div class="form-group" style="display: inline-block;">

<input type="" class="form-control ml-3" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:20%;" placeholder="id" name = "id1">

  </div>

  <button type="submit" class="btn btn-primary" style="position: relative;left:-10%;">GO</button>
</form>


</div>


</div>







<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$_REQUEST['id1']."'";
$a = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($a);


?>



<div class="card" style="width: 18rem;">
  <img src="<?php echo '../'.$row1['img'];?>" class="card-img-top" style = "height: 17rem;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = "" >
  <div class="card-body">
    <h5 class="card-title"><?= $row1['name']?></h5>
    <p class="card-text"><?=$row1['bio']?></p>
    <hr style="border: solid 1px;">
    <p class="card-text"><?='D.O.B: '.$row1['dob']?></p>
    <p class="card-text"><?='Gender: '.$row1['gender']?></p>
    <p class="card-text"><?='Address: '.$row1['address']?></p>

    <p class="card-text"><?='Email: '.$row1['email']?></p>
    <?php
$sql1 = "SELECT * from `userdata` WHERE id = '".$_REQUEST['id1']."'";
$a = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($a);
    ?>
        <p class="card-text"><?='Phone No: '.$row1['phone']?></p>

    <p class="card-text"><?='Password: '.$row1['password']?></p>
    <p class="card-text"><?='Joined On: '.$row1['time']?></p>

    <a href="delete_profile.php?creator_id=<?php echo $row1['id']?>" class="btn btn-outline-danger btn-block">Delete</a>

  </div>
</div>






<?php }?>




<style type="text/css">
	
body,html{
	height: 100%;
}


</style>
</body>
</html>