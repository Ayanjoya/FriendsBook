<?php

session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php  include'menu.php';?>

</head>
<body>






<?php



include 'conn.php';

	$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `dob`, `bio` ,`address`, `img` ,`back_cover`FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);

?>






<div style="position: relative;width: 100%;border-left: 0px;">


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






	
<form style="padding-left: 1%;" action="create_slide.php" method="post" enctype="multipart/form-data">
  <div class="form-row">

    <div class="form-group col-md-12">
      <label for="inputPassword4">Tag Friend</label>
        <div class="input-group-prepend">
    <span class="input-group-text">@</span>
      <input type="text" name = "tag"class="form-control" id="inputPassword4" placeholder="Friend Name">
    </div></div>
  </div>

  <div class="form-group">
    <label for="inputAddress2">Description</label>
    <textarea type="text" name=  "desc"class="form-control" id="inputAddress2" rows="7" placeholder="Description"></textarea>
  </div>


  <div class="form-row">

    <div class="form-group col-md-8">








    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">



<input type="file" name="pic1"><br><br>

<input type="file" name="pic2"><br><br>

<input type="file" name="pic3"><br><br>

<input type="file" name="pic4"><br><br>


    </div>

  </div><br>


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

 body , html{
    height:100%;

} 

</style>