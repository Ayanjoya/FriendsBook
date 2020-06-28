<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php session_start();include'menu.php';include'conn.php';?>








<div class="pt-0">
<div class="w-100 bg-dark pt-3">
  

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





$sql11 = "SELECT * from user_likes WHERE post_id = '".$_REQUEST['id1']."' order by id desc";
$a1 = mysqli_query($conn, $sql11);




while ($row1 = mysqli_fetch_assoc($a1)){


$sql111 = "SELECT * from profile WHERE user_id = '".$row1['user_id']."' order by id desc";
$a11 = mysqli_query($conn, $sql111);
$row11 = mysqli_fetch_assoc($a11);




?>
  



<div class="media pt-5 pb-5 pl-1" style="border-bottom: solid 3px;">
  <img src="<?= '/FriendsBook/user/'.$row11['img']?>" class="mr-3" alt="..." style = "width: 80px;border-radius: 80%;">
  <div class="media-body">
    <h5 class="mt-0"><?= $row11['name']?></h5>
    <?= $row11['name'].' liked the post of id no '.$_REQUEST['id1']?>        <a class="btn btn-outline-danger" href="delete_like.php?id=<?= $row1['id']?>">Delete</a>  

  </div>
</div>





<?php }}?>




<style type="text/css">
  
body,html{
  height: 100%;
}


</style>
</body>
</html>