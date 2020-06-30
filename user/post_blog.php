<?php

session_start();


?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php  include'menu.php';?>

</head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body  style="overflow: ;">






<?php



include 'conn.php';

	$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `dob`, `bio` ,`address`, `img` ,`back_cover`FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);

?>


	








<div style="width: 100%;">


<div>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4"><a style = "color: white;">News</a></h5><br>
      <h5 class="text-white h4"><a style = "color: white;">Information</a></h5><br>
      <h5 class="text-white h4"><a style = "color: white;">Thoughts</a></h5>

    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>





<br>
	
<form style="padding-left: 1%;" action="create_blog.php" method="post" enctype="multipart/form-data">
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
    <label for="inputAddress2">Title</label>
    <textarea type="text" name=  "title"class="form-control" id="inputAddress2" rows="1" placeholder="Description"></textarea>
  </div>


  <div class="form-group">
    <label for="inputAddress2">Description</label>
    <textarea type="text" name=  "desc"class="form-control" id="inputAddress2" rows="7" placeholder="Description"></textarea>
  </div>


  <div class="form-row" style="padding-left: 0.5%;">

    <div class="form-group col-md-12">
      <label for="inputState">Choose Media:</label><br>
   
      <input type="file" id="inputEmail4" name ="media">

    </div></div>  


<br>
<br>
  <button style= "position: relative;right :0.5%;bottom: 1.2rem;"type="submit" class="btn btn-dark btn-block">Post Blog</button>
</form>

	










































</div>





</body>
</html>






</style>