<!DOCTYPE html>
<html>
<head>
<?php
session_start();

include 'menu.php';


include 'conn.php';

$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$_SESSION['id']."'";

$sql11 = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned` FROM `userdata` WHERE id = '".$_SESSION['id']."'";


$a = mysqli_query($conn, $sql1);
$a1 = mysqli_query($conn, $sql11);

$row = mysqli_fetch_assoc($a);
$row2 = mysqli_fetch_assoc($a1);



?>
	<title></title>
</head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <body style="background-color: white;">

<style type="text/css">
  @font-face{
    font-family: Good Dog;
    src: url('ConcertOne-Regular.ttf');
  }
</style>





<img src="profileimages/1avatar.png" style="border-radius: 80%;height: 30%;position:relative;position: absolute;left:40%;top:100px;">




<h3 style="border-radius: 80%;height: 30%;position:relative;position: absolute;left:43.5%;top:350px;">Edit Profile</h3>


<form style="padding-top: 20%" method="post" action="edit_update.php" enctype="multipart/form-data">



</div>

<div class="form-group">
<label for="exampleInputEmail1">Profile Image:</label>

<input type="file" name ="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

<br>


</div>
<div class="form-group">
<label for="exampleInputEmail1">Back Cover Image:</label>
<input type="file" name ="back_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

<br>


  <div class="form-group">
    <label for="exampleInputEmail1">Phone No:</label>
    <input type="number" name = "phone"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $row2['phone']?>">

<br>


  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address:</label>
    <input type="text" name = "address"class="form-control" id="exampleInputPassword1" value="<?php echo $row['address']?>">

    <br>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Bio Status:</label>
    <textarea type="text" name = "bio"class="form-control" id="exampleInputPassword1" rows="7"></textarea>

    <br>

  </div>

  <button type="submit" class="btn btn-outline-success btn-lg btn-block a1">Submit</button>

</form>
  <form action="home.php" method="post">

<script type="text/javascript">
  
function fun() {
  alert("These changes will not save or press esc to save them");
}

</script>

  <button type="submit" onclick = "fun()"class="btn btn-outline-secondary btn-lg btn-block a2">Cancel</button>
</form>
</form>





<style type="text/css">

label{
  padding-left: 0.5%;
}
  
.a1{
background-color: #0091FC;color: white;border: #0091FC
}
.a2{
background-color: #E14444;color: white;border: #0091FC
}
</style>








<!--

<form style="padding-top: 2%" method="post" action="edit_update.php" enctype="multipart/form-data">



</div>

<div class="form-group">
<label for="exampleInputEmail1">Profile Image:</label>
<input type="file" name ="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

</div>
<div class="form-group">
<label for="exampleInputEmail1">Back Cover Image:</label>
<input type="file" name ="back_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  <div class="form-group">
    <label for="exampleInputEmail1">Phone No:</label>
    <input type="number" name = "phone"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $row2['phone']?>">

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address:</label>
    <input type="text" name = "address"class="form-control" id="exampleInputPassword1" value="<?php echo $row['address']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Bio Status:</label>
    <textarea type="text" name = "bio"class="form-control" id="exampleInputPassword1" rows="7"></textarea>
  </div>

  <button type="submit" class="btn btn-outline-success btn-lg btn-block a1">Submit</button>

</form>
  <form action="home.php" method="post">

<script type="text/javascript">
	
function fun() {
	alert("These changes will not save or press esc to save them");
}

</script>

  <button type="submit" onclick = "fun()"class="btn btn-outline-secondary btn-lg btn-block a2">Cancel</button>
</form>
</form>





<style type="text/css">

label{
	padding-left: 0.5%;
}
	
.a1{
background-color: #0091FC;color: white;border: #0091FC
}
.a2{
background-color: #E14444;color: white;border: #0091FC
}

</style> -->



<style type="text/css">
  
html , body{
  height: 100%;
  width: 100%;
}


</style>
</body>
</html>