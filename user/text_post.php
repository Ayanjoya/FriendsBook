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


	







<?php include 'post_menu.php';?>






<br>
	
<form style="padding-left: 1%;" action="create_text.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-12">

        <div class="input-group-prepend">
    <span class="input-group-text">@</span>
      <input type="text" name = "friend"class="form-control" id="inputPassword4" placeholder="Tag Friends">
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

  <div style="display: none;">
  <div class="form-group">
    <label for="inputAddress2">Background Color</label>
    <input type="color" name=  "back"class="form-control" id="inputAddress2" rows="7" placeholder="Description"></input>
  </div>

  <div class="form-group">
    <label for="inputAddress2">Font Color</label>
    <input type="color" name=  "font"class="form-control" id="inputAddress2" rows="7" placeholder="Description"></input>
  </div>
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