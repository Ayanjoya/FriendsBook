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

$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `url` ,`friend` FROM `user_post` WHERE id = ".$_REQUEST['id1']."";
$a = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($a);



if ($row1['color'] != ''){

?>


<div style="padding-top: 5%;">


<div style="padding-left: 20%;">
<div class="card" style="width: 18rem;height: 28rem;overflow: auto;background-color: <?php echo $row1['background'];?>;color: <?php echo $row1['color'];?>;border: solid 0.1px lightgray;">

  <div class="card-body">
        <h5 class="card-title" style=""><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text" ><h2><?php echo $row1['description'];?></h2></p>
    <a href="delete.php?id=<?= $_REQUEST['id1']?>" class="btn btn-outline-danger btn-block a1">Delete</a>

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
  <img src="<?php echo '/FriendsBook/user/'.$row1['media'];?>" class="card-img-top" style = "height: 17rem;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = "" >
  <div class="card-body" style="background-color: <?php echo $row1['background'];?>;">
    <h5 class="card-title"><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text"><?php echo substr($row1['description'] , 0 , 18).'...';?></p>
        <a href="delete.php?id=<?= $_REQUEST['id1']?>" class="btn btn-outline-danger btn-block a1">Delete</a>

    <a href="http://soclpie.com/veiw.php?creator_id=<?php echo $row1['id']?>" class="btn btn-outline-danger btn-block a1">Go somewhere</a>
  </div>
</div></div>	


</div>



<?php }


elseif ($row1['url'] != '') {

?>


<div style="padding-top: 5%;">


<div style="padding-left: 20%;">
<div class="card" style="width: 18rem;">
  <img src="<?php echo '/FriendsBook/user/'.$row1['media'];?>" class="card-img-top" style = "height: 17rem;object-fit: cover;background-color: <?php echo $row1['background'];?>;" alt = "">
  <div class="card-body" style="background-color: <?php echo $row1['background'];?>;">
    <h5 class="card-title"><a href="post.php"><?php echo "@".$row1['name'];?></a></h5>
    <p class="card-text"><?php echo substr($row1['description'] , 0 , 18).'...';?></p>
    <a href="delete.php?id=<?= $_REQUEST['id1']?>" class="btn btn-outline-danger btn-block a1">Delete</a>
        <a href="<?php echo 'http://soclpie.com/vidio.php?vidio_url='.$row1['url']?>/&creator_id=<?=$row1['id']?>" class="btn btn-outline-danger btn-block a1">Detail</a>
  </div>
</div></div>  


</div>




<?php


}


?>

<?php }?>




<style type="text/css">
	
body,html{
	height: 100%;
}


</style>
</body>
</html>