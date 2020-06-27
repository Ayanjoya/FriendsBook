<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
	

body{
	background-image: url('signin.gif');
	background-size: cover;
	font-family: roboto;
	color:#303030;
	overflow: hidden;
}

div{
	background-color: #DEDEDE;
	width: 70rem;
	height:45rem;
	position: relative;
	top:2.5rem;
	left:10rem;

}

input{
	width:69.6rem;
	font-size: 200%;
	position: relative;
	bottom: 1rem
}




</style>


<div>
	<h1 style="	text-align: center;">Welcome to Friends Book</h1>
	<br>
<form action = "signin_check.php" method = "post">
	<h1 style="padding-left: 1%">Name</h1>
	<input type="text" name="name">
	<h1 style="padding-left: 1%">Phone No</h1>
	<input type="number" name="phone">
	<h1 style="padding-left: 1%">Email</h1>
	<input type="email" name="email">
	<h1 style="padding-left: 1%">Password</h1>
	<input type="text" name="password">
	<button style="font-size: 5rem;font-family: roboto;background-color: #0087FF;color: white;
		box-shadow:0 9px 5px black;position: relative;left:75.3%;top:0rem;">Submit</button>
	</form>
	<form action = "login.php">
	<button style="font-size: 5rem;font-family: roboto;background-color: #0087FF;color: white;box-shadow:0 9px 5px black;position: relative;top:-7rem;">LogIn</button>
	</form>
</div>
</form>

</body>
</html> -->



<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>

<form action="login_check.php" method="post">

  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>

        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <button class="submit">Sign In</button>

      <p class="forgot-pass">Forgot Password ?</p>


    </div>
</form>






    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form action="signin_check.php" method="post">

      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" name="name">
        </label>
        <label>
          <span>Phone</span>
          <input type="number" name="phone">
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password">
        </label>
        <button class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>
  </form>
<script type="text/javascript" src="script.js"></script>
</body>
</html> -->






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






<div class=" w-100 h-100 pl-1 p-5 alert-warning">
      <form method="post" action="signin_check.php" class="w-100">

  <div class="form-group">
    <label for="exampleInputPassword1" class="text-dark">Name</label>
    <input type="text" class="form-control bg-dark text-white" id="exampleInputPassword1" name="name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="text-dark">Phone</label>
    <input type="number" class="form-control bg-primary text-white" id="exampleInputPassword1" name="phone">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1" class="text-dark">Email address</label>
    <input type="email" class="form-control bg-danger text-white" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-dark">Password</label>
    <input type="password" class="form-control text-white" id="exampleInputPassword1" name="password" style="background: #62FFA5;">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-labe text-dark" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-outline-dark">Submit</button>
</form>

    </div>
    
  </div>
  
</div>


<style type="text/css">
  
html,body{
  height: 100%;
}

</style>
</body>
</html>