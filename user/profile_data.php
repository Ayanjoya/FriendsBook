  <?php  
session_start();
?>



<!DOCTYPE html>
<html>
<head>

<?php


  include 'menu.php';
?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<h6 style="color: white; visibility: ;">
<?php



include 'conn.php';

$sql1 = "SELECT `id`,`user_id`, `name`, `email`, `gender`, `dob`, `address`, `img`  FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);

if($row['user_id'] > 0)
{

echo '<script type="text/javascript">';

echo 'window.location.href = "http://soclpie.com/home.php";';

echo '</script>';

}


elseif ($_SESSION['id'] == 0 or $row['banned'] == "yes") {
  echo '<script type="text/javascript">';
  echo 'window.location.href = "http://soclpie.com/intro.php?"';
  echo '</script>';
}


?>
</h6>

	<title>
	</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</head>
<body class="alert-info">





<form style="padding-bottom:1%;" action="profile_data_sub.php" method="post">
  <div class="form-group">
    <label >Gender</label>
    <input name = "gender"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input name = "address"type="text" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">D.O.B.</label>
    <input name = "dob"type="date" class="form-control" id="exampleInputPassword1">
  </div>


  <button type="submit" class="btn btn-primary" style="position: relative;left:0%;top:3rem;font-size: 2rem;animation-duration: 2s;animation-name: exs;">Submit</button>
</form>




</div>






</body>
</html>

<!-- <style type="text/css">
	
	/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

body{
	font-family: roboto;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>

<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="avatar.png" alt="Avatar" class="avatar"style = "height: 50%;width: 30%;">
  </div>

  <div class="container">
    <label for="uname"><b>Gender</b></label>
    <input type="text" placeholder="Gender" name="gender" required>

    <label for="uname"><b>D.O.B.</b></label>
    <input type="date" placeholder="D.O.B." name="dob" required style="width: 100%;font-size: 200%">
    <label for="uname"><b>Address</b></label>
    <input type="text" placeholder="Address" name="address" required>

    <button type="submit">Submit</button>

  </div>

</form> -->

