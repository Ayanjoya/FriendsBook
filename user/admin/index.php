<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<div class="bg-dark p-5 h-100">
	<h2 class="text-white pb-5" style="text-align: center;">Welcome To Soclpie Admin Pannel</h2>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-light">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-light">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label text-light" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>






<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if($_REQUEST['email'] == "soclpie@gmail.com" and $_REQUEST['password'] == "-SnxSV++rHz$4G4TU-Y"){

		$_SESSION['type'] = "active";

		header('Location: home.php');
	}

}

else{

echo '




';

}

?>




<script type="text/javascript">
	
alert('No Such email or password found try again or go to soclpie.com')


</script>











<style type="text/css">
	
body,html{
	height: 100%;
}

</style>

</body>
</html>