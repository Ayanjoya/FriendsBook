<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php  include'menu.php';?>

</head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body  style="overflow: hidden;">




<div style="border:solid black 3px; width: 20%;height: 47.8rem;background-color: #FEFEFE;overflow: scroll;">


<?php



session_start();
include 'conn.php';

	$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `dob`, `bio` ,`address`, `img` ,`back_cover`FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);

?>


	
<img src="<?php  echo $row['img']?>"style = "border-radius: 80%;border: solid white;position: relative;top:1rem; height: 35%; border-bottom-right-radius: 80%;width: 100%;border-width: 0.3rem;object-fit: cover;">


<h2 style="padding-top: 3%;padding-left: 3%;text-align: left;">
	

<?php


echo $row['name'];


?>



</h2>

<h6 style="position:relative; bottom: 1%; padding-left: 3%;font-size: 110%;color: #5D5C5C;text-align: left;">
	

<?php

echo $row['email'];

	$sql11 = "SELECT `phone` , `time`FROM `userdata` WHERE id = '".$_SESSION['id']."'";
	$a1 = mysqli_query($conn, $sql11);
	$row1 = mysqli_fetch_assoc($a1);

?>



</h6>

  <ul class="list-group list-group-flush" style="padding-bottom: 5%;padding-top: 5%">
    <li class="list-group-item">Gender: <?php echo $row['gender']?></li>
    <li class="list-group-item">D.O.B: <?php echo $row['dob']?></li>
    <li class="list-group-item">Phone no: <?php echo $row1['phone']?></li>
    <li class="list-group-item">Address: <?php echo $row['address']?></li>
    <li class="list-group-item">Joined on: <?php echo $row1['time']?></li>


</ul>
	<hr style=" position :relative; top:-2%; border-top: 3px solid gray;">
	<h5 style="padding-left: 3%;">
		
		<?php




		echo $row['bio'];


		?>

	</h5>



	<hr style="border-top: 3px solid gray;">


<a class="btn btn-outline-secondary btn-lg btn-block blckk" href="edit.php">Edit</a>


<a class="btn btn-outline-secondary btn-lg btn-block blckk1" href="pro_delete.php">Delete</a>

</div>












<div style="border:solid;position: relative;left:20%;bottom: 48rem;width: 80%;height: 48rem;border-left: 0px;">


<div>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4"><a style = "color: white;"href="post.php">Media</a></h5><br>
      <h5 class="text-white h4"><a style = "color: white;"href="text_post.php">Text</a></h5><br>
      <h5 class="text-white h4"><a style = "color: white;"href="post_slide.php">Slide</a></h5>
      <h5 class="text-white h4" style="padding-top: 2%;"><a style = "color: white;"href="post_url.php">Url</a></h5>

    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>





<br>
	
<form style="padding-left: 1%;" action="create_text.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword4">Tag Friend</label>
        <div class="input-group-prepend">
    <span class="input-group-text">@</span>
      <input type="text" name = "friend"class="form-control" id="inputPassword4" placeholder="Friend Name">
    </div></div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Publish Type</label>
    <input type="choose" name = "publish"class="form-control disabled" id="inputAddress" value="Public" style = "background: white;"disabled>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Description</label>
    <textarea type="text" name=  "desc"class="form-control" id="inputAddress2" rows="7" placeholder="Description"></textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Background Color</label>
    <input type="color" name=  "back"class="form-control" id="inputAddress2" rows="7" placeholder="Description"></input>
  </div>

  <div class="form-group">
    <label for="inputAddress2">Font Color</label>
    <input type="color" name=  "font"class="form-control" id="inputAddress2" rows="7" placeholder="Description"></input>
  </div>


<br><br>


  <button style= "position: relative;right :0.5%;bottom: 1.2rem;"type="submit" class="btn btn-dark btn-block">Post</button>
</form>

	











































</div>





</body>
</html>



<style type="text/css">
	

.blckk{
	background-color:#006BFC;border-color: #006BFC;color: white;
}
.blckk1{
	background-color:#FF4949;border-color: #FF4949;color: white;
}


</style>